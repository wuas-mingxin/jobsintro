<?php

namespace App\Http\Livewire\Template\Basic;

use Livewire\Component;
use Avihs\PostReply\Models\Comment;

class ShowComments extends Component
{
    public $post_id;
    public $comments;
    protected $listeners = ['commentAdded'];
    public function mount($post_id){
        $this->post_id = $post_id;
    }

    public function commentAdded()
    {
        $this->comments = Comment::where('wuas_post_id',$this->post_id)->get();
    }
    public function render()
    {
        $this->comments = Comment::where('wuas_post_id',$this->post_id)->get();
        return view('livewire.template.basic.show-comments',['comments'=>$this->comments]);
    }
}
