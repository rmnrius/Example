<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Painting extends Model{
    protected $table = 'artwork_listings'; // Specify the table name if it's not the plural of the model name

    protected $fillable = ['title', 'artist'];

}


?>