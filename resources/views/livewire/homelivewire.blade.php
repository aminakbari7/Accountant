<div class="content-wrapper pb-0">
    {{-- week --}}
    <div class="row">
        <div class="content-wrapper" dir="rtl">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div id="dvContents" class="card-body" style="text-align: center" >
                            <h4 class="card-title" style="font-size: 20px;">افراد مسئول صندوق ها</h4>
                            <button id="button" onclick="printData()"  class="bt btn-danger" style="text-align:right!important">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                                    <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
                                    <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1"/>
                                  </svg>
                             چاپ
                            </button>
                            <div class="table-responsive table-hover">
                                <table id="printTable" class="table table-hover" dir="rtl">
                                    <tbody>
                                        <tr>
                                            <th>شماره صندوق</th>
                                            <th>شنبه</th>
                                            <th>یک شنبه</th>
                                            <th>دوشنبه</th>
                                            <th>سه شنبه</th>
                                            <th>چهارشنبه</th>
                                            <th>پنجشنبه</th>
                                            <th>جمعه</th>
                                        </tr>
                                        <tr>
                                            <td>۱</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                        </tr>
                                        <tr>
                                            <td>۱</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                        </tr>
                                        <tr>
                                            <td>۱</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                        </tr>
                                        <tr>
                                            <td>۱</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
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
    {{-- reserv --}}
    <div class="row">
        <div class="content-wrapper" dir="rtl">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body" style="text-align: center">
                            <h4 class="card-title">لیست انتظار</h4>
                            <div class="table-responsive table-hover">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <th>شماره</th>
                                            <th>کاربر</th>
                                            <th>تاریخ</th>
                                            <th>وضعیت</th>
                                            <th>دلیل</th>
                                            <th>دلیل</th>
                                            <th>دلیل</th>
                                        </tr>
                                        <tr>
                                            <td>۱۸۳</td>
                                            <td>محمد</td>
                                            <td>۱۱-۷-۲۰۱۴</td>
                                            <td><span class="badge badge-success">تایید شده</span></td>
                                            <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                                چاپ</td>
                                        </tr>
                                        <tr>
                                            <td>۲۱۹</td>
                                            <td>محمدرضا</td>
                                            <td>۱۱-۷-۲۰۱۴</td>
                                            <td><span class="badge bg-danger">در حال بررسی</span></td>
                                            <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                                چاپ</td>
                                        </tr>
                                        <tr>
                                            <td>۶۵۷</td>
                                            <td>رضا</td>
                                            <td>۱۱-۷-۲۰۱۴</td>
                                            <td><span class="badge badge-primary">تایید شده</span></td>
                                            <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                                چاپ</td>
                                        </tr>
                                        <tr>
                                            <td>۱۷۵</td>
                                            <td>پرهام</td>
                                            <td>۱۱-۷-۲۰۱۴</td>
                                            <td><span class="badge badge-danger">رد شده</span></td>
                                            <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                                چاپ</td>
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
    {{-- child --}}
    <div class="row">
        <div class="content-wrapper" dir="rtl">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body" style="text-align: center">
                            <h4 class="card-title">لیست کودک</h4>
                            <div class="table-responsive table-hover">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <th>شماره</th>
                                            <th>کاربر</th>
                                            <th>تاریخ</th>
                                            <th>وضعیت</th>
                                            <th>دلیل</th>
                                            <th>دلیل</th>
                                            <th>دلیل</th>
                                        </tr>
                                        <tr>
                                            <td>۱۸۳</td>
                                            <td>محمد</td>
                                            <td>۱۱-۷-۲۰۱۴</td>
                                            <td><span class="badge badge-success">تایید شده</span></td>
                                            <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                                چاپ</td>
                                        </tr>
                                        <tr>
                                            <td>۲۱۹</td>
                                            <td>محمدرضا</td>
                                            <td>۱۱-۷-۲۰۱۴</td>
                                            <td><span class="badge bg-danger">در حال بررسی</span></td>
                                            <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                                چاپ</td>
                                        </tr>
                                        <tr>
                                            <td>۶۵۷</td>
                                            <td>رضا</td>
                                            <td>۱۱-۷-۲۰۱۴</td>
                                            <td><span class="badge badge-primary">تایید شده</span></td>
                                            <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                                چاپ</td>
                                        </tr>
                                        <tr>
                                            <td>۱۷۵</td>
                                            <td>پرهام</td>
                                            <td>۱۱-۷-۲۰۱۴</td>
                                            <td><span class="badge badge-danger">رد شده</span></td>
                                            <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                                چاپ</td>
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

</div>