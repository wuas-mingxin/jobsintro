<?php

namespace App\Http\Livewire\Template\Basic;

use Livewire\Component;

class ShowComments extends Component
{
    public $comments;
    public $comment;
    protected $listeners = ['commentAdded' => '$refresh'];
    public function hydrate($comments)
    {
        $this->comments = $comments;
    }
    public function render()
    {
        return view('livewire.template.basic.show-comments');
    }
}
