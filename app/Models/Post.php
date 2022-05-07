<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

/**
     * Get the author for the post
     */
    public function getAuthor()
    {

        $this->belongsTo(Author::class);

    }

    

}
