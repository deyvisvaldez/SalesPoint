<?php

namespace SalesPoint\Http\Requests;

use SalesPoint\Http\Requests\Request;
use Illuminate\Routing\Route;

class UpdateUserRequest extends Request
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
        $id = $this->route->getParameter('id');

        $rules = array(
            'email' => 'required|email|unique:users,email'.$id,
            'dni' => 'required|min:8|unique:users,dni'.$id,
            'firstname' => 'required|min:2',
            'lastname' => 'required|min:2',
        );

        return $rules;
    }
}
