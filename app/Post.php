<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2017/6/30
 * Time: 15:17
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subject', 'body',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * Get the user that owns the post.
     */
    public function post()
    {
        return $this->belongsTo(User::class);
    }
}