<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $table = 'usersdata';
    protected $fillable = [
        'name', 'email', 'contact_number', 'company_name', 'role_name'
    ]; //This is mass assignment
    protected $primaryKey = 'id';
    public    $timestamp = false;
}
