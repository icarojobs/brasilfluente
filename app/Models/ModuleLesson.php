<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModuleLesson extends Model 
{
    use \Backpack\CRUD\CrudTrait;

    protected $table = 'module_lesson';

    protected $guarded = ['id'];

}