<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\People;
use App\Models\role;
use App\Models\Box;
use App\Models\Boxrole;
use Carbon\Carbon;
class Boxeslivewire extends Component
{
    public  $name,$addrole,$addbox,$newname,$key=-1,$idu=-1;
    protected $rules = [

        'name' => 'required|',
    ];
    public function update($id)
    {
        $this->key=1;
        $this->idu=$id;
    }
    public function changeactive($id)    
    {
        $temp=Box::find($id);
        $temp->active=$temp->active*(-1);
        $temp->save();

    }
    public function edit($id)
    {
        $check=Box::where('name', $this->newname)->count();
        if($check== 0 && $this->newname!=null)
        {
            $temp=Box::find($id);
            $temp->name=$this->newname;
            $temp->save();
            $this->key=-1;
            $this->idu=-1;
            session()->flash('msg2',' با موفقیت تغییر یافت');
                $this->redirect(route('boxes'));
        }
        if($check>0)
        {
            session()->flash('msg2','قبلا با این نام ثبت شده است');
            $this->redirect(route('boxes'));

        }

        if($this->newname==null)
        {
            session()->flash('msg2','فیلد خالی است');
            $this->redirect(route('boxes'));
        }

    }
    public function deleteb($id) 
    {
        $temp=Boxrole::find($id);
        $temp->delete();
        session()->flash('msg2','حذف شد');
    }
    public function addboxrole()
    {
        $check=Boxrole::where('Box_id', $this->addbox)
        ->where('role_id', $this->addrole)
        ->where('active',1);
        $size=$check->count();
        if($size==0)
        {
        Boxrole::create([
            'Box_id'=> $this->addbox,
            'role_id'=> $this->addrole,
            'active'=>1,            
            
        ]);
                session()->flash('msg2','اضافه شد');
                $this->redirect(route('boxes'));
        }
 
        if ($size > 0 ) 
        {
            session()->flash('msg2','این نقش قبلا ثبت شده است');
            $this->redirect(route('boxes'));
        }
    }

    public function add()
    {
        $this->validate();
        $check = Box::where('name', $this->name)->count();
        if ($check > 0) {
            session()->flash('msg','این صندوق قبلا ثبت شده است');
            $this->redirect(route('boxes'));
        }
        if ($check==0) {
            Box::create([
                'name'=>$this->name,
                'active'=>1,
                ]);
                session()->flash('msg','اضافه شد');
                $this->redirect(route('boxes'));
        }
    }

    public function render()
    {
        $roles = role::all();
        $boxes = Box::select('*')->orderBy('name', 'Asc')->get();
        $boxrole = Boxrole::all()->where('active',1);
        return view('livewire.boxeslivewire',['boxes'=> $boxes,'roles'=> $roles,'boxrole'=> $boxrole]);
    }
}
