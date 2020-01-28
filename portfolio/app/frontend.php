<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class frontend extends Model
{

    protected $table = 'frontends';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';


    protected $fillable = ['location', 'phone', 'email', 'linkedin', 'description'];

    
}
