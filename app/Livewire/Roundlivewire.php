<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Round;
use Carbon\Carbon;
use DateTime;
class Roundlivewire extends Component
{
    public $start,$end;
    public function add()
    {
        $check = round::where('start', $this->start)->count();
        $check2 = round::where('end', $this->end)->count();
        if ($check > 0 || $check2 > 0) 
        {
            session()->flash('msg','این دوره قبلا ثبت شده است');
            $this->redirect(route('rounds'));
        }
        if ($check==0 &&$check2==0 && $this->end!=null && $this->start!=null ) 
        {
            $datetime1 = new DateTime($this->start);
            $datetime2 = new DateTime($this->end);
            $interval = $datetime1->diff($datetime2);
            $days = $interval->format('%a');
            if($days!=6)
            {
                session()->flash('msg','تاریخ های وارد شده معیار یک هفته کامل نیستند');
                $this->redirect(route('rounds'));
            }
            else
            {
                round::create([
                    'start'=> $this->start,
                    'end'=> $this->end,
                    'active'=>1,
                ]);
                session()->flash('msg','با موفقیت ثبت شد');
                $this->redirect(route('rounds'));
            }
        }
    }
    public function render()
    {
        $rounds=round::all()->where('active',1);
        return view('livewire.roundlivewire',['rounds'=>$rounds]);
    }
}