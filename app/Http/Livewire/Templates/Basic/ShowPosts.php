<?php

namespace App\Http\Livewire\Templates\Basic;

use Livewire\Component;
use App\Models\WuasPost;
use App\Notifications\PostLiked;
use Carbon\Carbon;
class ShowPosts extends Component
{ 
    
   
    public $comment= [];
    public $showComments = ['post_id'=> 0, 'show'=>false];
    public $perPage=5;
    public $showProgressBar;
    protected $listeners = ['postAdded' => '$refresh'];

    public function hydrate()
    {
        $this->dispatchBrowserEvent('showLoadingBar');
    }
    
    public function dehydrate()
    {
        $this->dispatchBrowserEvent('hideLoadingBar');
    }

    public function loadMore(){
        $this->perPage +=5;
    }
    
    public function showComments($post_id)
    {
        $this->showComments = ['post_id'=> $post_id, 'show'=>true];
    }

    public function addCommentToDatabase($post)
    {
        $commentPost = WuasPost::find($post);
        $comment = $commentPost->addComment($this->comment[$post], auth()->user());
        $this->comment[$post] = '';
        $this->emit('commentAdded');
    }
   
    public function likePost($post)
    {
        $post = WuasPost::find($post);
        auth()->user()->toggleLike($post);
        
        $liked=[
                'type'=>'like',
                'info'=>'user Like the post',
                'post_id'=>$post->id,
                'notification_by'=>auth()->user()->id
            ];

        $notification = $post->user->notify(new PostLiked($liked));
        
        $this->emit('postLiked');
       
    }

    public function sharePost($post)
    {
        $post = WuasPost::find($post)->toArray();
        unset($post['id']);
        unset($post['shared_from']);
        $post = WuasPost::create($post);
        $post->shared_from = auth()->user()->id;
        $post->status = 1;
        $post->created_at = Carbon::now();
        $post->updated_at = Carbon::now();
        $post->save();
        $this->dispatchBrowserEvent('sharedPost');
    }
    
    public function render()
    {
        $posts =  WuasPost::select(array('id','post_text','post_file_name','post_file_thumb','user_id','created_at','post_file','shared_from'))
        ->with(['user','comments'])->where('status',1)->orderBy('id','DESC')->paginate($this->perPage);   
        return view('livewire.templates.basic.show-posts',[
            'posts'=>$posts
        ]);
    }
}
