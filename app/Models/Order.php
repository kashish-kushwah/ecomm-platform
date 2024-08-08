<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable= ['user_id','shipping_address','shipping_amount','items_amount','total_amount','order_status'];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function orderDetail(){
        return $this->hasMany(OrderDetail::class, "order_id","id");
    }

    public function address(){
        return $this->belongsTo(Address::class,"shipping_address","id");
    }
}
