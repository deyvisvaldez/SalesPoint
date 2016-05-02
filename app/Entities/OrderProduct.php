<?php

namespace SalesPoint;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderProduct extends Model
{
    use SoftDeletes;

    protected $table = 'orders_products';
    protected $fillable = ['order_id', 'product_id', 'quantity', 'price', 'subtotal'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
