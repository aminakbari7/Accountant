<div class="card">
    {{ verta('+1 week') }}
    <div class="card-body">
        @if($key==1)
        <h4 class="card-title" style="text-align: right" dir="ltr">({{ $peoples->count() }}) لیست کاربران فعال</h4>
        @endif
        @if($key==0)
        <h4 class="card-title" style="text-align: right" dir="ltr">({{ $peoples->count() }}) لیست کاربران غیرفعال</h4>
        @endif
        <form wire:submit="change">
        <div class="col-md-6">
            <div class="form-group row">
              <div class="col-sm-9">
                <select class="form-control" wire:model="newkey">
                  <option value="1">کاربران فعال </option>
                  <option value="0">کاربران غیر فعال</option>
                </select>
              </div>
              <button type="submit" class="btn btn-danger">نمایش</button>
            </div>

        </div>  
    </form>
        <hr>
        <div class="table-responsive table-hover">
            <table class="table ">
                <thead>
                    <tr>
                        <th>نام و نام خانوادگی</th>
                        <th>نقش</th>
                        <th>روز استراحت</th>
                        <th>شماره تلفن</th>
                        <th>تغییر اطلاعات</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($peoples as $people)
                        <tr>
                            <td>{{ $people->fname }}  {{ $people->lname }}</td>
                            <td>{{ $people->role->title}}</td>
                            <td>
                                @if($people->rest==0)    
                                ندارد                          
                                @endif
                                @if($people->rest==1)
                                شنبه    
                                @endif
                                @if($people->rest==2) 
                                یک شنبه   
                                @endif
                                @if($people->rest==3) 
                                دوشنبه   
                                @endif
                                @if($people->rest==4) 
                                سه شنبه   
                                @endif
                                @if($people->rest==5)  
                                چهارشنبه  
                                @endif
                                @if($people->rest==6)
                                پنج شنبه    
                                @endif
                                @if($people->rest==7)  
                                جمعه  
                                @endif 
                            </td>
                            <td>{{ $people->phone }}</td>
                            <td>
                                <a href={{ route('singlepeople', ['id' => $people->id]) }}>
                                    <button type="button" class="btn btn-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                            <path
                                                d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z">
                                            </path>
                                        </svg>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div style="margin-left:400px">

            {{ $peoples->links('layouts.paginate', ['elements' => $peoples]) }}
        </div>
    </div>
</div>
