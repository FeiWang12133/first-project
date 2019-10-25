<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];

    //connect to customer.php
    public function customers(){
        return $this -> hasMany(Customer::class);
    }
}
