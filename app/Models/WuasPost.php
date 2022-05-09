<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use Avihs\PostReply\Models\Reply;
use Avihs\PostReply\Models\Comment;
use Avihs\PostReply\Models\Message;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Avihs\PostReply\Traits\HasComment;

class WuasPost extends Model
{
    use HasComment;

    protected $guarded = [];
    protected $with = ['user', 'comments'];

    /**
	 * Get the author of the post.
	 */
	public function user(): BelongsTo
	{
	    return $this->belongsTo(User::class);
	}

	/**
	 * Get all of the comments for the post.
	 */
	public function comments(): HasMany
	{
	    return $this->hasMany(Comment::class);
	}
	
	/**
     * Get all of the replies for the post.
     */
    public function replies(): HasManyThrough
    {
        return $this->hasManyThrough(Reply::class, Comment::class);
    }

    /**
     * Remove the specified resource from storage.
     * @return Boolean 
     */

    function delete(): bool
    {
        $this->comments()->delete(); 
        return parent::delete();;
    }
}
