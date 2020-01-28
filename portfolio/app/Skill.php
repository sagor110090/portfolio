<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{

    protected $table = 'skills';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';


    protected $fillable = ['name', 'parcantage'];

    
}
