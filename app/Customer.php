<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Customer extends Model
{
    //fillable array, everything that you will fill, same way with guarded
    //protected $fillable = ['name', 'email', 'active'];

    //guarded example, nothing is guarded
    protected $guarded = [];

    //scope method, connect to customerController, list function
    public function scopeActive($query)
    {
        return $query->where('active',1);
    }

    public function scopeInactive($query){
        return $query->where('active', 0);
    }

    //connect to company.php
    public function company(){
        return $this->belongsTo(Company::class);
    }
}


