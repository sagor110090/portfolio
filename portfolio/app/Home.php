<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{

    protected $table = 'homes';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';


    protected $fillable = ['title_1', 'title_2', 'facebook_link', 'linkedin_link', 'instagram_link', 'twiter_link', 'image', 'background'];

    
}
