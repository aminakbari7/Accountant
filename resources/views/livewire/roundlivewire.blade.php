<div class="content-wrapper pb-0">
    <div class="row">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card" dir="rtl">
                    <div class="card">
                        <div class="card-body" style="text-align: center">
                            <h4 class="card-title">ثبت دوره جدید</h4>
                            <div class="table-responsive ">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>
                                                <form class="form-sample" wire:submit="add">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label"> شروع</label>
                                                                <div class="col-sm-9">
                                                                    <input data-jdp="" placeholder="سال/روز/ماه"  wire:model="start" type="text" class="form-control" />
                                                                </div>   
                                                                <label class="col-sm-3 col-form-label"> پایان</label>
                                                                <div class="col-sm-9">
                                                                    <input data-jdp="" placeholder="سال/روز/ماه"  wire:model="end" type="text" class="form-control" />
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <div class="col-sm-9">
                                                                    <button type="submit" class="btn btn-danger">ذخیره</button>
                                                                </div>
                                                            </div>
                                                            @if (session()->exists('msg'))
                                                                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 1000)" x-show="show">
                                                                    <div class="alert alert-success">
                                                                        {{ session('msg') }}
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </form>
                                        </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="content-wrapper" dir="rtl">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div id="dvContents" class="card-body" style="text-align: center" >
                            <h4 class="card-title" style="font-size: 20px;">لیست دوره ها</h4>
                            <form wire:submit="refresh">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                      <div class="col-sm-9">
                                        <select class="form-control" wire:model="addround">
                                          <option value="1"> فعال </option>
                                        </select>
                                      </div>
                                      <button type="submit" class="btn btn-danger">نمایش</button>
                                    </div>
                        
                                </div>  
                            </form>
                            <div class="table-responsive table-hover">
                                <table id="printTable" class="table table-hover" dir="rtl">
                                    <tbody>
                                        <tr>
                                            <th>شماره صندوق</th>
                                            <th>شروع</th>
                                            <th>پایان </th>
                                            <th>ویرایش تاریخ</th>
                                        </tr>
                                        @foreach ($rounds as $round)
                                        <tr>
                                            <td>۱</td>
                                            <td>{{ $round->start }}</td>
                                            <td>{{ $round->end }}</td>
                                            <td>محمد</td>
                                        </tr>                                                                                                              
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>