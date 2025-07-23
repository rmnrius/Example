<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Painting extends Model{
    use HasFactory;
    protected $table = 'artwork_listings'; // Specify the table name if it's not the plural of the model name

    protected $fillable = ['title', 'price'];

}


?>