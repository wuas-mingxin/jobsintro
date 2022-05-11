<?php

namespace App\Http\Livewire\Template\Basic;

use Livewire\Component;
use App\Models\WuasPost;
class ShowPosts extends Component
{ 
    
   
    public $comment= [];
    public $showComments = ['post_id'=> 0, 'show'=>false];
    public $perPage=5;

    public function mount()
    {
        
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
    }
    
    public function render()
    {
        $posts =  WuasPost::select(array('id','post_text','post_file_name','post_file_thumb','user_id','created_at','post_file'))
        ->with(['user','comments'])->where('status',1)->orderBy('id','DESC')->paginate($this->perPage);
       
        return view('livewire.template.basic.show-posts',[
            'posts'=>$posts
        ]);
    }
}
