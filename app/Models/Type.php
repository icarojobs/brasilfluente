<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model 
{
    use \Backpack\CRUD\CrudTrait;

    protected $table = 'types';

    protected $guarded = ['id'];

}