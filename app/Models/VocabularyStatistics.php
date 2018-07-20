<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VocabularyStatistics extends Model 
{

    protected $table = 'vocabulary_statistics';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}