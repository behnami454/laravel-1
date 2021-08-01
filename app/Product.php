<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{	
    /**
    * Run the migrations.
    *
    * @return void
    */
    protected $fillable = [
        'name',
    ];
}
