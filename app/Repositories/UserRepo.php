<?php 

namespace SalesPoint\Repositories;

use SalesPoint\Entities\User;

class UserRepo extends BaseRepo {

    public function getModel()
    {
        return new User;
    }
}