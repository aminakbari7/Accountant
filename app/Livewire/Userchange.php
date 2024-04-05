<?php

namespace App\Livewire;

use App\Models\People;
use Carbon\Traits\Timestamp;
use Livewire\Component;
use App\Models\role;

use Carbon\Carbon;
class Userchange extends Component
{   
    public $people;
    public $roles;
    public $newfname,$newlname,$newbirthday,$newaddress,$newcodm,$newphone,$newrole,$newrest;
    public function delit()
    {  
    $this->people->active=-1; 
    session()->flash('msg','  کاربر غیر فعال شد');
    }
    public function active()
    {  
    $this->people->active=1; 
    session()->flash('msg','  کاربر فعال شد');
    }
    public function save()
    {
 
        if($this->newfname!=null)
        {
            $this->people->fname= $this->newfname;
            session()->flash('msg','تغییرات اعمال شد');
        }
        if($this->newlname!=null)
        {
            $this->people->lname= $this->newlname;
            session()->flash('msg','تغییرات اعمال شد');
        }
        if($this->newphone!=null)
        {
            $this->people->phone= $this->newphone;
            session()->flash('msg','تغییرات اعمال شد');
        }
        if($this->newrest!=null)
        {
            $this->people->rest= $this->newrest;
            session()->flash('msg','تغییرات اعمال شد');
        }
        if($this->newrole!=null)
        {
            $this->people->role_id= $this->newrole;
            session()->flash('msg','تغییرات اعمال شد');
        }

        if($this->newcodm!=null)
        {
            $this->people->codm= $this->newcodm;
            session()->flash('msg','تغییرات اعمال شد');
        }

        if($this->newbirthday!=null)
        {
            $this->people->birthday= $this->newbirthday;
            session()->flash('msg','تغییرات اعمال شد');
        }
        if($this->newaddress!=null)
        {
            $this->people->address= $this->newaddress;
            session()->flash('msg','تغییرات اعمال شد');
        }

        $this->people->save();

    }
    public function mount($people)
    {
     $this->people = $people;    
     $this->roles = role::all();    

    }
    public function render()
    {

        return view('livewire.userchange');
    }
}
