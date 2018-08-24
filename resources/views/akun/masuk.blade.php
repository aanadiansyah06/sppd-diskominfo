<!DOCTYPE html>
<html lang="en">
<head>
  @include('komponen.head')
  @yield('head-login')
</head>

<body class="cyan">
  <!-- Loading Animation -->
  @include('komponen.loading')
  @yield('loading-animation')
  <!-- Loading Animation -->

  <!-- Form Login Akun -->
  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" action="" method="">
        {{ csrf_field() }}
        <div class="row">
          <div class="input-field col s12 center">
            <img src="images/login-logo.png" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text"><strong>SURAT PERINTAH PERJALANAN DINAS ONLINE</strong></p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" type="text" name="" value="" required>
            <label for="username" class="center-align">Nomor Induk Kepegawaian</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" name="" value="" required>
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Ingat saya</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <a href="" class="btn waves-effect waves-light col s12">MASUK</a>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="page-register.html">Daftar Akun</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="page-forgot-password.html">Lupa Password ?</a></p>
          </div>
        </div>

      </form>
    </div>
  </div>
  <!-- Form Login Akun -->

  @include('komponen.body')
  @yield('body-javascript')

</body>
</html>
