<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\People;
use App\Models\role;

class Adduser extends Component
{

    public $fname,$lname,$birthday,$address,$codm,$phone,$role,$rest;
    public $roles;

    protected $rules = [

        'fname' => 'required|',
        'lname' => 'required|',
        'rest'=>'required|',
    ];
    public function add()
    {
        $this->validate();
        People::create([
        'fname'=>$this->fname,
        'lname'=>$this->lname,
        'phone'=>$this->phone,
        'codm'=>$this->codm,
        'active'=>1,
        'birthday'=>$this->birthday,
        'rest'=>$this->rest,
        'role_id'=>$this->role,
        'address'=>$this->address,
        ]);
        session()->flash('msg','اضافه شد');
        $this->fname="";
        $this->lname="";
        $this->phone="";
        $this->codm="";
        $this->birthday="";
        $this->role="";
        $this->address="";
        $this->address="rest";


    }
    public function render()
    {
        $this->roles=role::all();
        return view('livewire.adduser');
    }
}
