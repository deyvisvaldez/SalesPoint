<?php

namespace SalesPoint\Http\Requests;

use SalesPoint\Http\Requests\Request;
use Illuminate\Routing\Route;

class UserRequest extends Request
{
    private $route;

    public function __construct(Route $route)
    {
        $this->route = $route;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //dd($this->route->getParameter('id'));
        $rules = array(
            'email' => 'required|email|unique:users,email',
            'dni' => 'required|min:8|unique:users,dni',
            'firstname' => 'required|min:2',
            'lastname' => 'required|min:2',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
        );

        $id = $this->route->getParameter('id');

        if ($id) 
        {
            $rules['email'] = 'required|email|unique:users,email'.$id;
            $rules['dni'] = 'required|min:8|unique:users,dni'.$id;
        }

        return $rules;
    }
}
