<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
        <a class="sidebar-brand brand-logo" href="{{ route('dashboard') }}"><img src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="{{ route('dashboard') }}"><img src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo" /></a>
      </div>
    <ul class="nav">


      <li class="nav-item mt-3">
        <a class="nav-link" href="{{ route('roles') }}">
          <i class="mdi mdi-file-document-box menu-icon"></i>      
          <span class="menu-title"> مدیریت نقش ها</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-contacts menu-icon"></i>
          <span class="menu-title">مدیریت کاربران</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic" style="">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('add') }}">
                <span class="menu-title">افزودن کاربر جدید</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users') }}">
                  <span class="menu-title">لیست کاربران</span>
                </a>
            </li>

          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('boxes') }}">
          <i class="mdi mdi-table-large menu-icon"></i>    
            <span class="menu-title">مدیریت صندوق ها</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('rounds') }}">
          <i class="mdi mdi-table-large menu-icon"></i>    
            <span class="menu-title"> مدیریت دوره ها</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('main') }}">
          <i class="mdi mdi-table-large menu-icon"></i>    
            <span class="menu-title"> محاسبه صندوق های دوره</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('history') }}">
          <i class="mdi mdi-chart-bar menu-icon"></i>
          <span class="menu-title">تاریخچه دوره ها</span>
        </a>
      </li>
      <li class="nav-item sidebar-actions">
        <div class="nav-link">
          <div class="mt-4">
            <ul class="mt-4 pl-0">
              <li>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf

                  <x-dropdown-link :href="route('logout')"
                          onclick="event.preventDefault();
                                      this.closest('form').submit();">
                      {{ __('خروج') }}
                  </x-dropdown-link>
              </form>
              </li>
            </ul>
          </div>
        </div>
      </li>
    </ul>
  </nav>
