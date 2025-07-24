<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Painting extends Model{
    use HasFactory;
    protected $table = 'artwork_listings'; // Specify the table name if it's not the plural of the model name

    // protected $fillable = ['artist_id','title', 'price'];
    protected $guarded = []; // Use guarded to allow mass assignment for all fields

    public function artist(){
        return $this->belongsTo(Artist::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'artwork_listing_id', table: 'artwork_tags');
    }

}


?>