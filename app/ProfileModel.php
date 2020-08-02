<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileModel extends Model
{
    protected $connection='mysql';
    protected $table='profile';
    // public $timestap='true';
    protected $fillable =array('NAME','DOB','AGE');
}
