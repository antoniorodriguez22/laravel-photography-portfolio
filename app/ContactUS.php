<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUS extends Model
{
    public $table = 'users';

    public $fillable = ['name','emailAddress'];

}
