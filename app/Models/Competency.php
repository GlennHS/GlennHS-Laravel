<?php

namespace App\Models;

class User extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'stars',
        'years',
        'imageLink',
    ];
}
