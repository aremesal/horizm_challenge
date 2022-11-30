<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'user_id', 'title', 'body', 'rating'];

    public static function calculateRating($title, $body) {
        return str_word_count($title)*2 + str_word_count($body);
    }
}
