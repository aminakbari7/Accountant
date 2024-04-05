<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\role;

class Rolelivewire extends Component
{

    public $title,$key_id=-1,$newtitle,$key=-1;

        
    protected $rules = [

        'title' => 'required|',
    ];

    public function change($id)
    {
        $this->key_id=$id;
        $this->key=1;
    }

    public function cancel()
    { $this->key_id=-1;
        $this->key=-1;

    }
    public function update($id)
    {
        $check = role::where('title', $this->newtitle)->count();
        if ($check > 0) {
            session()->flash('msg2','این نقش قبلا ثبت شده است');
            $this->redirect(route('roles'));
        }
        if ($check==0 && $this->newtitle!=null) {
        $temp=role::find($id);
        $temp->title=$this->newtitle;
        $temp->save();
        $this->key_id=-1;
        $this->key=-1;
        $this->redirect(route('roles'));
        }

    }
    public function add()
    {
        $this->validate();
        $check = role::where('title', $this->title)->count();
        if ($check > 0) {
            session()->flash('msg','این نقش قبلا ثبت شده است');
            $this->redirect(route('roles'));
        }
        if ($check==0) {
        role::create([
        'title'=>$this->title,
        ]);
        session()->flash('msg','اضافه شد');
        $this->title="";
        $this->redirect(route('roles'));
    }
    }
    public function render()
    {
        $roles=role::all(); 
        return view('livewire.rolelivewire',['roles'=>$roles]);
    }
}
