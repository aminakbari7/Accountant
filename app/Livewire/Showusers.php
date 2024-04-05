<?php

namespace App\Livewire;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\People;

class Showusers extends Component
{
use WithPagination;

    public $key=1;
    public $newkey=1;
    public function change()
    {
        $this->key=$this->newkey;
        $this->render();
    }
    public function render()
    {
        
        if($this->key==1)
        $peoples = People::orderBy('created_at', 'DESC')->where("active",1)->simplePaginate(10);
        if($this->key==0)
    $peoples = People::orderBy('created_at', 'DESC')->where("active",-1)->simplePaginate(10);
        return view('livewire.showusers',['peoples'=> $peoples]);
    }
}
