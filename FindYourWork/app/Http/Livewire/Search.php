<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;

class Search extends Component
{
    public  $query ='';
    public $jobs = [];

    public  $selectedIndex = 0;

    public function incrementIndex()
    {
        if($this->selectedIndex === count($this->jobs)-1)
        {
            $this->selectedIndex = 0;
            return;
        }
        $this->selectedIndex ++;
    }

    public function decrementIndex()
    {
        if($this->selectedIndex === 0)
        {
            $this->selectedIndex = (count($this->jobs)-1);
            return;
        }
        $this->selectedIndex--;
    }

    public function resetIndex()
    {
        $this->reset('selectedIndex');
    }

    public function showJob()
    {
        if($this->jobs->isNotEmpty())
       {
           return redirect()->route('show.jobs',[$this->jobs[$this->selectedIndex]['id']]);

       } 
    }
    public function updatedQuery()
    {
        $words = '%'. $this->query . '%';
            
                $this->jobs =  Job::where('title','like',$words)
                ->orwhere('description','like',$words)
                ->get();
    }
    public function render()
    {
        return view('livewire.search');
    }
}
