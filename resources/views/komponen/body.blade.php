@section('body-javascript')
<script type="text/javascript" src="{{ asset('js/plugins/jquery-1.11.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/prism/prism.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/plugins.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom-script.js') }}"></script>
@endsection

@section('body-header')
<header id="header" class="page-topbar">
    <div class="navbar-fixed">
        <nav class="navbar-color grey darken-3">
            <div class="nav-wrapper">
                <ul class="left">
                  <li><h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="{{url('img/logo/materialize-logo.png')}}" alt="materialize logo"></a> <span class="logo-text">Materialize</span></h1></li>
                </ul>
                <ul class="right hide-on-med-and-down">
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a></li></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
@endsection

@section('profile-info')
<li class="user-details grey lighten-3">
<div class="row">
    <div class="col col s4 m4 l4">
        <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
    </div>
    <div class="col col s8 m8 l8">
        <p class="white-text blue-text text-darken-3">John Doe</p>
        <p class="user-roal">Administrator</p>
    </div>
</div>
</li>
@endsection

@section('footer')
<footer class="page-footer grey darken-3">
    <div class="footer-copyright">
        <div class="container">
            Copyright © 2018 <b>Sistem Pengajuan Perjalanan Dinas Online</b>
            <span class="right"> Design and Developed by <b class="grey-text text-lighten-4">Diskominfo Kota Depok</b></span>
        </div>
    </div>
</footer>
@endsection

@section('javascript-library')
<!-- jQuery Library -->
<script type="text/javascript" src="{{ asset('js/plugins/jquery-1.11.2.min.js') }}"></script>
<!--materialize js-->
<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
<!--scrollbar-->
<script type="text/javascript" src="{{ asset('js/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>


<!-- chartist -->
<script type="text/javascript" src="{{ asset('js/plugins/chartist-js/chartist.min.js') }}"></script>

<!-- chartjs -->
<script type="text/javascript" src="{{ asset('js/plugins/chartjs/chart.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/chartjs/chart-script.js') }}"></script>

<!-- sparkline -->
<script type="text/javascript" src="{{ asset('js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/sparkline/sparkline-script.js') }}"></script>

<!-- google map api -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script>

<!-- data-tables -->
<script type="text/javascript" src="{{ asset('js/plugins/data-tables/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/data-tables/data-tables-script.js') }}"></script>

<!--jvectormap-->
<script type="text/javascript" src="{{ asset('js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/jvectormap/vectormap-script.js') }}"></script>

<!--google map-->
<script type="text/javascript" src="{{ asset('js/plugins/google-map/google-map-script.js') }}"></script>


<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="{{ asset('js/plugins.min.js') }}"></script>
<!--custom-script.js - Add your own theme custom JS-->
<script type="text/javascript" src="{{ asset('js/custom-script.js') }}"></script>

<script type="text/javascript">
/*Show entries on click hide*/
$(document).ready(function(){
    $(".dropdown-content.select-dropdown li").on( "click", function() {
        var that = this;
        setTimeout(function(){
        if($(that).parent().hasClass('active')){
                $(that).parent().removeClass('active');
                $(that).parent().hide();
        }
        },100);
    });
});
</script>
<!-- Toast Notification -->
@endsection
