<div>
    
    <div class="row">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card" dir="rtl">
                    <div class="card">
                        <div class="card-body" style="text-align: center">
                            <h4 class="card-title">ثبت نقش جدید</h4>
                            <div class="table-responsive ">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>
                                                <form class="form-sample" wire:submit="add">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label"> عنوان</label>
                                                                <div class="col-sm-9">
                                                                    <input wire:model="title" type="text" class="form-control" />
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

    @if (session()->exists('msg2'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" style="text-align: center">
        <div class="alert alert-warning">
            {{ session('msg2') }}
        </div>
    </div>
@endif
    <div class="row mb-8">
        <div class="content-wrapper" dir="rtl">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body" style="text-align: center">
                            <h4 class="card-title">لیست نقش ها</h4>
                            <div class="table-responsive table-hover">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <th>شماره ردیف</th>
                                            <th>عنوان</th>
                                            <th>تغییر</th>
                                        </tr>
                                        @if ($roles->count() > 0)
                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach ($roles as $role)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $role->title }}</td>
                                                    <td>
                                                        <button wire:key="role-{{ $role->id }}" wire:click="change({{ $role->id }})" type="button" class="btn btn-success">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-pen"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </td>
                                                    @if($key_id==$role->id)
                                                    <tr style="background-color: rgb(222, 240, 204)">
                                                        <td>{{ $i }}</td>
                                                        <td>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label"> عنوان جدید</label>
                                                                <div class="col-sm-9">
                                                                    <input wire:model="newtitle" type="text" class="form-control" />
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <button wire:key="role-{{ $role->id }}" wire:click="update({{ $role->id }})" type="button" class="btn btn-warning">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor" class="bi bi-pen"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z">
                                                                    </path>
                                                                </svg>
                                                                ذخیره
                                                            </button>
                                                            <button wire:key="role-{{ $role->id }}" wire:click="cancel" type="button" class="btn btn-danger">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor" class="bi bi-pen"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z">
                                                                    </path>
                                                                </svg>
                                                                انصراف
                                                            </button>
                                                        </td>
                                                        @endif
                                                </tr>
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
