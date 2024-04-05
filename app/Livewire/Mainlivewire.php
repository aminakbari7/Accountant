<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\role;
use App\Models\Boxrole;
use App\Models\box;
use App\Models\People;
use App\Models\History;
use App\Models\temp;
use App\Models\Round;

class Mainlivewire extends Component
{


    public function refresh()
    {

    }
    public function render()
    {
        return view('livewire.mainlivewire');
    }
}
