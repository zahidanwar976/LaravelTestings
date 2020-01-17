<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    //
    protected $table = "users";
    protected $primaryKey = "id";
     protected $fillable = ['name', 'email', 'password'];
    // protected $fellable = array('name','email','password');
    public $timestamp = true;

}
