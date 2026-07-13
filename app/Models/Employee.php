<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable=['name','age','email','role_id'];
    public function role(){
        {
            return $this->belongsToMany(Role::class);//many emp can have same role but one emp has only 1 role
            //each employee is linked to one role using key 
            
        }
        
    }

}
