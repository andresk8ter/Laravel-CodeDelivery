<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Order extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'client_id',
        'user_delivery_man_id',
        'total',
        'status'
    ];

    public function items(){
        return $this->hasMany(OderItem::class);
    }

    public function deliveryman(){
        return $this->belongsTo(User::class);

    }

    public function products(){
        return $this->hasMany(Product::class);
    }

}
