<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
          <h4 class="card-title text-right">تغییر اطلاعات کاربر</h4>
          <hr>
          <form class="form-sample" wire:submit="save">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">نام </label>
                  <div class="col-sm-9">
                    <input wire:model="newfname"  value="{{$people->fname}}"type="text"  class="form-control"  placeholder="{{$people->fname}}"/>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">نام خانوادگی</label>
                  <div class="col-sm-9">
                    <input type="text" wire:model="newlname" value="{{$people->lname}}" class="form-control"  placeholder="{{$people->lname}}"/>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">روز استراحت</label>
                  <div class="col-sm-9">
                    <select class="form-control" wire:model="newrest" value="{{$people->rest}}">
                      <option value="{{$people->role_id}}">بدون تغییر</option>
                        <option value="0">ندارد</option>
                        <option value="1">شنبه</option>
                        <option value="2">یک شنبه</option>
                        <option value="3">دوشنبه</option>
                        <option value="4">سه شنبه</option>
                        <option value="5">چهارشنبه</option>
                        <option value="6">پنج شنبه</option>
                        <option value="7">جمعه</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">سطح</label>
                  <div class="col-sm-9">
                    <select class="form-control" wire:model="newrole" value="{{$people->role->title}}">
                      <option value="{{$people->role_id}}">بدون تغییر</option>
                      @if($roles->count()>0)
                      @foreach ($roles as $role)
                    <option value="{{$role->id }}">{{ $role->title }}</option>
                    @endforeach
                    @endif
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">آدرس</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" wire:model="newaddress"  value="{{$people->address}}" placeholder="{{$people->address}}"/>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">تلفن همراه</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" wire:model="newphone" value="{{$people->phone}}" placeholder="{{$people->phone}}"/>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label" >کد ملی</label>
                    <div class="col-sm-9">
                      <input wire:model="newcodm" type="text" class="form-control"value="{{$people->codm}}"  placeholder="{{$people->codm}}"  />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">تاریخ تولد</label>
                    <div class="col-sm-9">
                      
                      <input class="form-control" data-jdp="" wire:model="newbirthday" value="{{$people->birthday}}" placeholder="{{$people->birthday}}">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <div class="col-sm-9">
                      @if($people->active==1)
                      <button type="submit" class="btn btn-success">ذخیره</button>
                      <button wire:click="delit({{ $people }})" type="submit" class="btn btn-danger">غیر فعال کردن</button>
                      @endif
                      @if($people->active==-1)
                      <button wire:click="active({{ $people }})" type="submit" class="btn btn-warning">فعال کردن </button>
                      @endif
                    </div>
                    
                  </div>
                  @if (session()->exists('msg'))
                  <div x-data="{show: true}" x-init="setTimeout(() => show = false, 1000)" x-show="show">
                      <div class="alert alert-success">
                          {{ session('msg') }}
                        </div>
                    </div>
                    @endif
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
    
  </div>
