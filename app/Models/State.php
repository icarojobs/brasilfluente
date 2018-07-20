<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use \Backpack\CRUD\CrudTrait;

    protected $guarded = ['id'];
}
