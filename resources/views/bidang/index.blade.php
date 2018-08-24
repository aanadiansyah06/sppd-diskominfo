<!DOCTYPE html>
<html lang="en">
<head>
    @include('komponen.head')
    @yield('head-dashboard')
</head>

<body>
    @include('komponen.body')
    @yield('body-header')

    <div id="main">
        <div class="wrapper">
        <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation grey lighten-3" style="margin-top: 8px;">
                @yield('profile-info')
                <li class="li-hover"><p class="ultra-small margin more-text">SISTEM</p></li>
                <li class=""><a href="{{ url('/dashboard')}}" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a></li>
                <li class=""><a href="{{ url('/dashboard/anggaran')}}" class="waves-effect waves-cyan"><i class="mdi-editor-attach-money"></i> Pengelolaan Anggaran</a></li>
                <li class=""><a href="{{ url('/dashboard/dinas')}}" class="waves-effect waves-cyan"><i class="mdi-communication-forum"></i> Pengelolaan Dinas</a></li>
                <li class="bold active"><a href="{{url('/dashboard/bidang')}}" class="waves-effect waves-cyan"><i class="mdi-content-content-paste"></i> Pengelolaan Bidang</a></li>
                <li class=""><a href="{{url('/dashboard/seksi')}}" class="waves-effect waves-cyan"><i class="mdi-action-account-child"></i> Pengelolaan Seksi</a></li>
                <li class=""><a href="{{url('/dashboard/pegawai')}}" class="waves-effect waves-cyan"><i class="mdi-social-people"></i> Pengelolaan Pegawai</a></li>
                <li class=""><a href="{{url('/dashboard/user')}}" class="waves-effect waves-cyan"><i class="mdi-social-group-add"></i> Pengelolaan User</a></li>
                <li class="li-hover"><div class="divider"></div></li>
                <li class="li-hover"><p class="ultra-small margin more-text">USER</p></li>
                <li class=""><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Profil</a></li>
                <li class=""><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-input"></i> Logout</a></li>
            </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only grey darken-3" style="top:-65px;"><i class="mdi-navigation-menu"></i></a>
            </aside>
            <section id="content">
                <div class="container">
                    <div id="map-canvas" data-lat="40.747688" data-lng="-74.004142" style="display:none;"></div>
                    <!-- Start of Content -->
                    <p>Konten bidang</p>
                    <!-- End of Content -->
                </div>
            </section>
        </div>
    </div>
    @yield('footer')
    @yield('javascript-library')
</body>

</html>
