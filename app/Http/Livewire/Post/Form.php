<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use App\Models\Post;

class Form extends Component
{
    /**
     * Indicates if Post deletion is being confirmed.
     *
     * @var bool
     */
    public $confirmingPostCreation = false;
    public $name = '';

    protected $rules = [
        'name' => 'required'
    ];

    /**
     * Confirm that the User would like to create Post.
     *
     * @return void
     */
    public function confirmPostCreate()
    {
        $this->password = '';

        $this->dispatchBrowserEvent('confirming-create-post');

        $this->confirmingPostCreation = true;
    }

    /**
     * Render the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.post.form');
    }

    /**
     * Save Post.
     *
     * @return void
     */
    public function savePost()
    {
        $this->validate();

        $this->resetErrorBag();

        $post = new Post();
        $post->name = $this->name;
        $post->save();

        $this->name = '';

        $this->emit('saved');

        $this->confirmingPostCreation = false;
    }
}
