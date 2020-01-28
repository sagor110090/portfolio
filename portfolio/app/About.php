<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{

    protected $table = 'abouts';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';


    protected $fillable = ['name', 'email', 'phone', 'linkedin', 'description'];

    
}
