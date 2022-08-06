<?php

namespace App\Http\Livewire\Templates\Basic;

use Livewire\Component;
use App\Models\WuasPost;
class GuestPost extends Component
{
    public $comment= [];
    public $showComments = ['post_id'=> 0, 'show'=>false];
    public $perPage=5;
    public $showProgressBar;

    public function notLoggedIn(){

    }
    public function showComments($post_id)
    {
        $this->showComments = ['post_id'=> $post_id, 'show'=>true];
    }
     public function loadMore(){
        $this->perPage +=5;
    }
    public function render()
    {
        $posts =  WuasPost::with('sharedFrom')->select(array('id','post_text','post_file_name','post_file_thumb','user_id','created_at','post_file','shared_from'))
        ->with(['user','comments'])->where('status',1)->orderBy('id','DESC')->paginate($this->perPage);

        return view('livewire.'. activeTemplate() .'guest-post',[
            'posts'=>$posts
        ]);
    }
}
