<?php 

namespace SalesPoint\Repositories;

use SalesPoint\Entities\Order;

class OrderRepo extends BaseRepo {

    public function getModel()
    {
        return new Order;
    }
}