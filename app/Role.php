<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['name','description']; //This is mass assignment
    protected $primaryKey = 'id';
    public 	  $timestamp = false;
}
