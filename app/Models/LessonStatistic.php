<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LessonStatistic extends Model 
{

    use \Backpack\CRUD\CrudTrait;

    protected $table = 'lesson_statistics';

    protected $guarded = ['id'];

}