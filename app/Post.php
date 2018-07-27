<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table = 'posts';
    
    //Primary Key
    public $primaryKey = 'id';

    //TimeStamp
    public $timeStamp = true;

    //categort
    public $category = 'category';
}
