<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Breeze Admin</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">

        @include('layouts.navbar')
        <div class="container-fluid page-body-wrapper">
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close mdi mdi-close"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-default-theme">
                    <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
                </div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
                </div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles light"></div>
                    <div class="tiles dark"></div>
                </div>
            </div>
            <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
                <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
                    <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="../../index.html"><img
                            src="../../assets/images/logo-mini.svg" alt="logo" /></a>
                    <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button"
                        data-toggle="minimize">
                        <i class="mdi mdi-menu"></i>
                    </button>
                    <ul class="navbar-nav">
                        <li class="nav-item nav-search border-0 ml-1 ml-md-3 ml-lg-5 d-none d-md-flex">
                            <form class="nav-link form-inline mt-2 mt-md-0" action="{{ route('search') }}">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search" name='search' />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="mdi mdi-magnify"></i>

                                        </span>
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ul>


                    <ul class="navbar-nav navbar-nav-right ml-lg-auto mr-5">
                        <li class="nav-item nav-profile dropdown border-0">
                            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#"
                                data-toggle="dropdown">
                                <img class="nav-profile-img mr-2" alt=""
                                    src="{{ asset('assets/images/avatar.png') }}" />
                                <span class="profile-name">{{ auth()->user()->name }}</span>
                            </a>
                            <div class="dropdown-menu navbar-dropdown " aria-labelledby="profileDropdown">
                                <i class="dropdown-item">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('اطلاعات ادمین') }}
                                    </x-dropdown-link>

                                </i>
                                <i class="dropdown-item">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                              this.closest('form').submit();">
                                            {{ __('خروج') }}
                                        </x-dropdown-link>
                                    </form>
                                </i>
                            </div>
                        </li>
                    </ul>



                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
            </nav>
            <div class="main-panel" dir="rtl">
                <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example1" class="table table-bordered table-striped dataTable"
                                    role="grid">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example1"
                                                rowspan="1" colspan="1" style="width: 10.10px;"
                                                aria-sort="ascending"
                                                aria-label=" شماره: activate to sort column descending"> شماره
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example1"
                                                rowspan="1" colspan="1" style="width: 22.22px;"
                                                aria-label="تاریخ: activate to sort column ascending">تاریخ</th>
                                           
                                           
                                            <th class="sorting" tabindex="0" aria-controls="example1"
                                                rowspan="1" colspan="1" style="width: 57.35px;"
                                                aria-label="اطلاعات بیشتر: activate to sort column ascending">اطلاعات بیشتر</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">Gecko</td>
                                            <td>۱.۸</td>
                                            <td>A</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">Gecko</td>
                                            <td>۱.۹</td>
                                            <td>A</td>
                                        </tr>
                                        
                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <!-- main-panel ends -->
                    </div>
                    <!-- page-body-wrapper ends -->
                </div>
                @include('layouts.footer')


                <!-- page-body-wrapper ends -->
            </div>
            <!-- container-scroller -->
            <!-- plugins:js -->
            <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
            <!-- endinject -->
            <!-- Plugin js for this page -->
            <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
            <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
            <script src="{{ asset('assets/vendors/flot/jquery.flot.js') }}"></script>
            <script src="{{ asset('assets/vendors/flot/jquery.flot.resize.js') }}"></script>
            <script src="{{ asset('assets/vendors/flot/jquery.flot.categories.js') }}"></script>
            <script src="{{ asset('assets/vendors/flot/jquery.flot.fillbetween.js') }}"></script>
            <script src="{{ asset('assets/vendors/flot/jquery.flot.stack.js') }}"></script>
            <script src="{{ asset('assets/vendors/flot/jquery.flot.pie.js') }}"></script>
            <!-- End plugin js for this page -->
            <!-- inject:js -->
            <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
            <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
            <script src="{{ asset('assets/js/misc.js') }}"></script>
            <!-- endinject -->
            <!-- Custom js for this page -->
            <script src="{{ asset('assets/js/dashboard.js') }}"></script>
            <!-- End custom js for this page -->
</body>

</html>
