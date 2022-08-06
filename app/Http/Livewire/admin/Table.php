<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\WuasPost;
use Illuminate\Support\Facades\Log;

class Table extends Component
{
    public $status;
    protected $listeners = ['updatePost'];

    public function updatePost(WuasPost $post, $status){
        $post->statusChanger($status)->save();
    }

    public function render()
    {
        $posts = WuasPost::with('sharedFrom')->where(function($query){
            if($this->status != ''){
                $query->where('status', $this->status);
            }
        })->paginate(\getPaginate());
        return view('livewire.admin.table', ['posts'=>$posts]);
    }
}
