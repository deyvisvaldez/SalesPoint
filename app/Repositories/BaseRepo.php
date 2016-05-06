<?php 

namespace SalesPoint\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepo {

    const PAGINATE = true;

    public $filters = [];

    protected $model;

    public function __construct()
    {
        $this->model = $this->getModel();
    }

    abstract public function getModel();

    public function all()
     {
        return $this->model->all();
     }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function store(array $data)
    {
        $this->model->fill($data);
        $this->model->save();
        return $this->model;
    }

    /*public function findOrFail($id)
    {
        return $this->getModel()->findOrFail($id);
    }*/

    public function search(array $data = array(), $paginate = false)
    {
        $data = array_only($data, $this->filters);

        //filtra campos vacios o null
        $data = array_filter($data, 'strlen');

        $q = $this->model->select();

        foreach ($data as $field => $value) 
        {
            //slug_url -> filterBySlugUrl
            $filterMethod = 'filterBy' . studly_case($field);

            //Busca si existe el metodo en esta clase
            if (method_exists(get_called_class(), $filterMethod))
            {
                $this->filterMethod($q, $value);
            }
            else
            {
                $q->where($field, $data[$field]);
            } 
        }

        //Si paginate existe paginate() sino get()
        return $paginate ? $q->paginate()->appends($data) : $q->get();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(Model $model, array $data)
    {
        $model->fill($data);
        $model->save();
        return $model;
    }

    public function delete($model)
    {
        if (is_numeric($model)) 
        {
            $model = $this->find($model);
        }
        $model->delete();
        return $model;
    }
}

