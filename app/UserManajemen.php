<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserManajemen extends Authenticatable
{
    protected $table='user_manajemen';
}
