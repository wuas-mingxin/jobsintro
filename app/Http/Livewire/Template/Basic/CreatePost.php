<?php

namespace App\Http\Livewire\Template\Basic;

use Livewire\Component;
use Livewire\WithFileUploads;
use File;
use App\Models\WuasPost;
use Carbon\Carbon;
class CreatePost extends Component
{
    use WithFileUploads;
    public $post_text;
    public $photo='';
    public function render()
    {
        return view('livewire.template.basic.create-post');
    }

    public function save()
    {
        $validatedData = $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);
        $post = new WuasPost;

        if($this->photo != '')
        {
            $now = Carbon::now();
            $dir = '/wuas-content/upload/images/post/'.$now->year.'/'.$now->month.'/'.$now->weekOfYear;
            $filename = auth()->user()->username.$now->hour.$now->minute.$now->second.'.jpg';
            if(!File::isDirectory($dir)){
                File::makeDirectory($dir, 0777, true, true);
            }
            $this->photo->storeAs($dir, $filename);
            $this->url = $this->photo->temporaryUrl();
            $post->post_file = $dir.'/'.$filename;
        }
        $post->user_id = auth()->user()->id;
        $post->post_text = $this->post_text;
        $post->status = 1;
        $post->save();
        $this->emit('postAdded');
        $this->dispatchBrowserEvent('closeModal');  
    }
}
