<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VocabularyStatistics extends Model 
{
    use \Backpack\CRUD\CrudTrait;
    use SoftDeletes;

    protected $table = 'vocabulary_statistics';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

}