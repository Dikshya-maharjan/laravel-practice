<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//gives class all db powers like all(),find(),create(),save(),delete()

class AuthUser extends Model
{
    protected $table='users';
}
