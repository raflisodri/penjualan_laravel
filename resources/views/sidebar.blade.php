@if(Auth()->User()->level == "Admin")

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="{{asset('foto/versibiru1.png')}}" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="{{asset('foto/versibiru2.png')}}" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{ asset('foto/' . Auth()->user()->foto)}}"" alt="profile" />
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column pr-3">
                    <span class="font-weight-medium mb-2"> {{ Auth()->User()->name }}</span>
                    <span class="font-weight-normal"> {{ Auth()->User()->level }}</span>
                </div>
                <span class="badge badge-danger text-white ml-3 rounded">3</span>
            </a>
        </li>
        <li class="nav-item">
          <a href="/dashboard">
            <a class="nav-link" href="/dashboard" >
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                <span class="menu-title">Menu</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="/user">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/member">Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/suplier">Suplier</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sepatu">Sepatu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/penjualan">penjualan</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
    
@else
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="{{asset('assets/images/logo.svg')}}" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="{{asset('assets/images/logo-mini.svg')}}" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{ asset('foto/' . Auth()->user()->foto)}}" alt="profile" />
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column pr-3">
                    <span class="font-weight-medium mb-2"> {{ Auth()->User()->name }}</span>
                    <span class="font-weight-normal"> {{ Auth()->User()->level }}</span>
                </div>
                <span class="badge badge-danger text-white ml-3 rounded">3</span>
            </a>
        </li>
        <li class="nav-item">
          <a href="/dashboard">
            <a class="nav-link" href="/dashboard" >
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                <span class="menu-title">Menu</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="/member">Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/penjualan">penjualan</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
@endif