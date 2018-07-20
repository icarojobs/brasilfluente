<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model 
{

    use \Backpack\CRUD\CrudTrait;

    protected $table = 'modules';

    protected $guarded = ['id'];

}