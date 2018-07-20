<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use \Backpack\CRUD\CrudTrait;
    use HasRoles;

    use Notifiable;

    protected $casts = [
        'picture' => 'array'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'clear_files'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPictureAttribute($value)
    {
        $attribute_name = "main_picture";
        $disk = config('filesystems.default');
        $destination_path = "uploads/escorts";
        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function city()
    {
        return $this->belongsTo('App\Models\City', 'city_id', 'id');
    }

}
