<div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title text-right">فرم ثبت نام</h4>
          <hr>
          <form class="form-sample" wire:submit="add">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">نام </label>
                  <div class="col-sm-9">
                    <input wire:model="fname" type="text"  class="form-control" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">نام خانوادگی</label>
                  <div class="col-sm-9">
                    <input type="text" wire:model="lname" class="form-control" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">روز استراحت</label>
                <div class="col-sm-9">
                  <select class="form-control" wire:model="rest">
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
                  <select class="form-control" wire:model="role">
                    @if($roles->count()>0)
                    <option value="">بدون انتخاب</option>
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
                    <input type="text" class="form-control" wire:model="address" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">تلفن همراه</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" wire:model="phone" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">تاریخ تولد</label>
                  <div class="col-sm-9">
                    <input class="form-control" data-jdp="" placeholder="سال/روز/ماه" wire:model="birthday">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label" >کد ملی</label>
                    <div class="col-sm-9">
                      <input wire:model="codm" type="text" class="form-control" />
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group row">
                    <div class="col-sm-9">
                      <button type="submit" class="btn btn-success">ذخیره</button>
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
