<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Job extends Component
{
    public $job;

    public function addLike()
    {
        if(auth()->check())
        {
            auth()->user()->likes()->toggle($this->job->id);
        }else{

            $this->emit('flash','Veillez-vous connecter pour liker svp','error');
        }

    }
    public function render()
    {
        return view('livewire.job');
    }
}
