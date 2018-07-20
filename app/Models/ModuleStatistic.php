<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModuleStatistic extends Model 
{
    use \Backpack\CRUD\CrudTrait;

    protected $table = 'module_statistics';

    protected $guarded = ['id'];

}