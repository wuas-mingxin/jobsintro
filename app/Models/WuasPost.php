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
use Overtrue\LaravelLike\Traits\Likeable;
use Overtrue\LaravelLike\Like;

class WuasPost extends Model
{
    use HasComment,Likeable;

    protected $fillable = ['id','post_text','post_file_name','post_file_thumb','user_id','created_at','post_file','shared_from'];
    protected $guarded = [];
    protected $with = ['user', 'comments'];

    /**
	 * Get the author of the post.
	 */
	public function user(): BelongsTo
	{
	    return $this->belongsTo(User::class);
	}

    public function statusChanger($status) {
        $this->status = $status;
        return $this;
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
    
    public function sharedFrom(): belongsTo
    {
        return $this->belongsTo(User::class, 'shared_from');
    }

    public function liked(): bool
    {
        $like = Like::where('user_id',auth()->user()->id)->where('likeable_id',$this->id)->count();
        if($like>0){
            return true;
        }
        return $like;
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

