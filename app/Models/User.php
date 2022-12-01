<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'city'
    ];

    /**
     * Get the posts for the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Gets the top post: post with max rating from the user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function topPost()
    {
        return $this->hasOne(Post::class)
            ->selectRaw('user_id, id, title, body, max(rating) as rating')
            ->groupBy('user_id');
    }

    public function avgPosts()
    {
        return $this->hasMany(Post::class)
            ->selectRaw('avg(rating) as rating')
            ->groupBy('user_id');
    }
}
