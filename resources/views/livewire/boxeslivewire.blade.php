<div>
    <div class="row">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card" dir="rtl">
                    <div class="card">
                        <div class="card-body" style="text-align: center">
                            <h4 class="card-title">ثبت صندوق جدید</h4>
                            <div class="table-responsive ">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>
                                                <form class="form-sample" wire:submit="add">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">عنوان</label>
                                                                <div class="col-sm-9">
                                                                    <input wire:model="name" type="text"
                                                                        class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <div class="col-sm-9">
                                                                    <button type="submit" class="btn btn-danger">اضافه
                                                                        کردن</button>
                                                                </div>
                                                            </div>
                                                            @if (session()->exists('msg'))
                                                                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)"
                                                                    x-show="show">
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





    {{-- --------------------- --}}
    <div class="row" dir="rtl">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body" style="text-align: center">
                    <h4 class="card-title">ثبت نقش برای صندوق</h4>
                    @if (session()->exists('msg2'))
                        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show">
                            <div class="alert alert-success">
                                {{ session('msg2') }}
                            </div>
                        </div>
                    @endif
                    <hr>
                    <form class="form-sample" wire:submit="addboxrole">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">انتخاب صندوق</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" wire:model="addbox" required
                                            oninvalid="this.setCustomValidity('فیلد خالی است')"
                                            onchange="this.setCustomValidity('')" type="text">
                                            <option value="">بدون انتخاب</option>
                                            @foreach ($boxes as $box)
                                                <option value="{{ $box->id }}">{{ $box->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">مجاز برای نقش</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" wire:model="addrole" required
                                            oninvalid="this.setCustomValidity('فیلد خالی است')"
                                            onchange="this.setCustomValidity('')" type="text">
                                            @if ($roles->count() > 0)
                                                <option value="">بدون انتخاب</option>
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->id }}">{{ $role->title }}</option>
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
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-success">ذخیره</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- --------------------- --}}

    <div class="row mb-8">
        <div class="content-wrapper" dir="rtl">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body" style="text-align: center">
                            <h4 class="card-title"> لیست صندوق ها({{ $boxes->count() }})</h4>
                            <div class="table-responsive table-hover">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <th>شماره ردیف</th>
                                            <th>عنوان صندوق</th>
                                            <th>وضعیت</th>
                                            <th>نقش های مجاز</th>
                                            <th>ویرایش</th>
                                        </tr>
                                        @if ($boxes->count() > 0)
                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach ($boxes as $box)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $box->name }}</td>
                                                    <td>
                                                        @if($box->active==1)
                                                        <p style="background-color: green">فعال</p>
                                                        @endif
                                                        @if($box->active==-1)
                                                        <p style="background-color: rgb(248, 21, 0)">غیر فعال</p>
                                                        @endif
                                                    </td>

                                                    <td>
                                                        @foreach ($boxrole as $bl)
                                                            @if ($bl->Box_id == $box->id)
                                                                <button wire:click="deleteb({{ $bl->id }})"
                                                                    style="color: rgb(235, 4, 4); justify-items: center">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor" class="bi bi-trash"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                                        <path
                                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                                    </svg>
                                                                </button>
                                                                {{ $bl->role->title }}
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        <button wire:key="box-{{ $box->id }}"
                                                            wire:click="update({{ $box->id }})" type="button"
                                                            class="btn btn-success">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-pen"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z">
                                                                </path>
                                                            </svg>
                                                            ویرایش عنوان
                                                        </button>
                                                        <button wire:key="box-{{ $box->id }}"
                                                            wire:click="changeactive({{ $box->id }})" type="button"
                                                            class="btn btn-success">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-pen"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z">
                                                                </path>
                                                            </svg>
                                                            تغییر وضعیت
                                                        </button>
                                                    </td>
                                                    
                                                </tr>
                                                @if($key==1 && $idu==$box->id)
                                                
                                                <tr style="background-color: rgb(222, 240, 204)">
                                                    <td>{{ $i }}</td>
                                                    <td>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label"> عنوان جدید</label>
                                                            <div class="col-sm-9">
                                                                <input wire:model="newname" type="text" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button wire:key="box-{{ $box->id }}" wire:click="edit({{ $box->id }})" type="button" class="btn btn-warning">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-pen"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z">
                                                                </path>
                                                            </svg>
                                                            ذخیره
                                                        </button>
                                
                                                    </td>
                                            </tr>
                                                @endif
                                                @php
                                                        $i += 1;
                                                    @endphp
                                            @endforeach
                                        @endif
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
