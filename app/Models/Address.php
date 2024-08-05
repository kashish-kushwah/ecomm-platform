<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','title','address_line1','address_line2','address_city','address_state','address_country', 'address_zipcode'];
}
