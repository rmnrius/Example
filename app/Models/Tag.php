<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;

     public function paintings(){
        return $this->belongsToMany(Painting::class, relatedPivotKey: 'artwork_listing_id', table: 'artwork_tags');
    }
}
