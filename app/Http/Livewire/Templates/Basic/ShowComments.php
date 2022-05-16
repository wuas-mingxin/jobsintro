<?php

namespace App\Http\Livewire\Templates\Basic;

use Livewire\Component;
use Avihs\PostReply\Models\Comment;

class ShowComments extends Component
{
    public $post_id;
    
    public function mount($post_id){
        $this->post_id = $post_id;
    }

    public function hydrate()
    {
        $this->comments = Comment::where('wuas_post_id',$this->post_id)->get();
    }
    public function render()
    {
        $comments = Comment::where('wuas_post_id',$this->post_id)->get();
        dd($comments);
        return view('livewire.template.basic.show-comments',compact('comments'));
        return view('livewire.templates.basic.show-comments');
    }
}
