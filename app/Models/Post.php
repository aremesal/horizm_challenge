<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'user_id',
        'title',
        'body',
        'rating'
    ];


    /**
     * Get the user owner of the post
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * Helper function to calculate the rating
     *
     * @param $title
     * @param $body
     * @return int
     */
    public static function calculateRating($title, $body) {
        return str_word_count($title)*2 + str_word_count($body);
    }
}
