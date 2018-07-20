<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model 
{
    use \Backpack\CRUD\CrudTrait;

    protected $table = 'lessons';

    protected $guarded = ['id'];

}