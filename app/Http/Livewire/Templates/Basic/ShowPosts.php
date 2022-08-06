<?php

namespace App\Http\Livewire\Templates\Basic;

use Livewire\Component;
use App\Models\WuasPost;
use App\Notifications\PostLiked;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
class ShowPosts extends Component
{
    use WithPagination;
    public $comment= [];
    public $showComments = ['post_id'=> 0, 'show'=>false];
    public $perPage=5;
    public $showProgressBar;
    protected $listeners = ['postAdded' => '$refresh'];


    public function hydrate()
    {
        $this->dispatchBrowserEvent('showLoadingBar');
    }

    public function updateDatabase()
    {

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
        if($this->comment[$post] == null)
            return null ;
        $commentPost = WuasPost::with('sharedFrom')->find($post);
        $comment = $commentPost->addComment($this->comment[$post], auth()->user());
        $this->comment[$post] = '';
        $liked=[
                'type'=>'comment',
                'info'=>'commented the post',
                'post_id'=>$post,
            ];
        $notification = $commentPost->user->notify(new PostLiked($liked,auth()->user()->id));
        $this->emit('commentAdded');
    }

    public function likePost($id)
    {
        $post = WuasPost::with('sharedFrom')->find($id);
        auth()->user()->toggleLike($post);
        if($post->isLikedBy(auth()->user()))
        {
            $liked=[
                    'type'=>'like',
                    'info'=>'liked your post',
                    'post_id'=>$id,
                ];

            $notification = $post->user->notify(new PostLiked($liked,auth()->user()->id));
        }

    }

    public function sharePost($post)
    {
        $post = WuasPost::with('sharedFrom')->find($post)->toArray();
        unset($post['id']);
        unset($post['shared_from']);
        $post = WuasPost::with('sharedFrom')->create($post);
        $post->shared_from = auth()->user()->id;
        $post->status = 1;
        $post->created_at = Carbon::now();
        $post->updated_at = Carbon::now();
        $post->save();
        $this->dispatchBrowserEvent('sharedPost');
    }

    public function render()
    {
        $posts =  WuasPost::with('sharedFrom')->select(array('id','post_text','post_file_name','post_file_thumb','user_id','created_at','post_file','shared_from'))
        ->with(['user','comments'])->where('status',1)->orderBy('id','DESC')->paginate($this->perPage);
        return view('livewire.'. activeTemplate() .'show-posts',[
            'posts'=>$posts
        ]);
    }
}
