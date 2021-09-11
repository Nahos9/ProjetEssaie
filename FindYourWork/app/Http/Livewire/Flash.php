<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Flash extends Component
{
    protected $listeners = ['flash' => 'setMessage'];
    public $message;
    public $type;


    public function setMessage($message,$type)
    {
        $this->message = $message;
        $this->type = $type;
        $this->dispatchBrowserEvent('flash-message');
    }
    public function render()
    {
        return view('livewire.flash');
    }
}
