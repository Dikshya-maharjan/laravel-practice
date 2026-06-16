<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table='roles';
    protected $fillable=['name','role_id'];
    public function employees(){
        return $this->hasMany(Employee::class);

    }

}
