<!DOCTYPE html>
<html lang="en">
<head>
    @include('komponen.head')
    @yield('head-dashboard')
</head>

<body>
    @include('komponen.body')
    @yield('body-header')

    <!-- Main Content -->
    <div id="main">
        <div class="wrapper">
        <!-- Sidebar -->
        <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation grey lighten-3" style="margin-top: 8px;">
                <li class="li-hover"><p class="ultra-small margin more-text">SISTEM</p></li>
                <li class=""><a href="{{ url('/dashboard')}}" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a></li>
                <li class=""><a href="{{ url('/dashboard/anggaran')}}" class="waves-effect waves-cyan"><i class="mdi-editor-attach-money"></i> Pengelolaan Anggaran</a></li>
                <li class=""><a href="{{ url('/dashboard/dinas')}}" class="waves-effect waves-cyan"><i class="mdi-communication-forum"></i> Pengelolaan Dinas</a></li>
                <li class=""><a href="{{url('/dashboard/bidang')}}" class="waves-effect waves-cyan"><i class="mdi-content-content-paste"></i> Pengelolaan Bidang</a></li>
                <li class="bold active"><a href="{{url('/dashboard/seksi')}}" class="waves-effect waves-cyan"><i class="mdi-action-account-child"></i> Pengelolaan Seksi</a></li>
                <li class=""><a href="{{url('/dashboard/pegawai')}}" class="waves-effect waves-cyan"><i class="mdi-social-people"></i> Pengelolaan Pegawai</a></li>
                <li class=""><a href="{{url('/dashboard/user')}}" class="waves-effect waves-cyan"><i class="mdi-social-group-add"></i> Pengelolaan User</a></li>
                <li class="li-hover"><div class="divider"></div></li>
                <li class="li-hover"><p class="ultra-small margin more-text">USER</p></li>
                <li class=""><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Profil</a></li>
                <li class=""><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-input"></i> Logout</a></li>
            </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only grey darken-3" style="top:-65px;"><i class="mdi-navigation-menu"></i></a>
            </aside>
            <!-- Sidebar -->
            <!-- Main Content -->
            <section id="content">
              <div class="container">
              <!-- Breadcrumbs -->
              <div id="breadcrumbs-wrapper" style="background-color: #F9F9F9">
                <div class="row">
                  <div class="col s12 m12 l12">
                    <h5 class="breadcrumbs-title">Pengelolaan Seksi</h5>
                      <ol class="breadcrumbs">
                        <li><a href="{{ url('/dashboard')}}">Dashboard</a></li>
                        <li class="active">Data Pengelolaan Seksi</li>
                      </ol>
                  </div>
                </div>
              </div>
              <!-- Breadcrumbs -->
              <div id="map-canvas" data-lat="40.747688" data-lng="-74.004142" style="display:none;"></div>
              <!-- Table -->
              <div class="row">
                <div class="col s12 m12 l12">
                <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>OPD</th>
                        <th>Bidang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 10;
                    for($i=1; $i<20; $i++){
                    ?>
                    <tr>
                        <td>{{$i}}</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td><a class="modal-trigger" href="#modal-ubah">Ubah</a> | <a href="">Hapus</a></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
                </div>
              </div>
              <!-- Table -->
              </div>
            </section>
            <!-- Main Content -->
        </div>
        <div class="fixed-action-btn" style="bottom: 50px; right: 20px;">
            <a class="btn-floating btn-large red modal-trigger" href="#modal-tambah">
              <i class="mdi-content-add"></i>
            </a>
        </div>
    </div>
    <!-- Main Content -->

    <!-- Modal 1 - Form Tambah -->
    <div id="modal-tambah" class="modal form-modal">
      <div class="modal-content">
        <div class="row">
          <div class="col s12 m12 l12">
                <div class="header2 center-align title" id="form-modal-title">PENGELOLAAN SEKSI - TAMBAH DATA SEKSI</div>
                <br><br>
                <div class="row">
                  <form class="col s12">
                    <div class="row">
                      <div class="input-field col s12">
                        <select name="">
                          <option value="" disabled selected>Pilih Organisasi Pemerintah Daerah</option>
                          <option value="1">Manager</option>
                          <option value="2">Developer</option>
                          <option value="3">Business</option>
                        </select>
                        <label>OPD</label>
                      </div>
                      <div class="input-field col s12">
                        <select name="">
                          <option value="" disabled selected>Pilih Bidang Seksi</option>
                          <option value="1">Manager</option>
                          <option value="2">Developer</option>
                          <option value="3">Business</option>
                        </select>
                        <label>BIDANG</label>
                      </div>
                      <div class="input-field col s12">
                        <input placeholder="Tulis Nama Seksi" id="name2" type="text" required>
                        <label for="first_name">SEKSI</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <textarea id="compose" class="materialize-textarea" length="500" placeholder="Tulis Deskripsi"></textarea>
                        <label for="email">DESKRIPSI</label>
                      </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                          <button class="btn blue waves-effect waves-light center col s12" type="submit" name="action">TAMBAH SEKSI</button>
                        </div>
                    </div>
                  </form>
                </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <!-- Modal 1 - Form Tambah -->

    <!-- Modal 2 - Form Ubah -->
    <div id="modal-ubah" class="modal form-modal">
      <div class="modal-content">
        <div class="row">
          <div class="col s12 m12 l12">
                <div class="header2 center-align title" id="form-modal-title">PENGELOLAAN SEKSI - UBAH DATA SEKSI</div>
                <br><br>
                <div class="row">
                  <form class="col s12">
                    <div class="row">
                      <div class="input-field col s12">
                        <select name="">
                          <option value="" disabled selected>Pilih Organisasi Pemerintah Daerah</option>
                          <option value="1">Manager</option>
                          <option value="2">Developer</option>
                          <option value="3">Business</option>
                        </select>
                        <label>OPD</label>
                      </div>
                      <div class="input-field col s12">
                        <select name="">
                          <option value="" disabled selected>Pilih Bidang Seksi</option>
                          <option value="1">Manager</option>
                          <option value="2">Developer</option>
                          <option value="3">Business</option>
                        </select>
                        <label>BIDANG</label>
                      </div>
                      <div class="input-field col s12">
                        <input placeholder="Tulis Nama Seksi" id="name2" type="text" required>
                        <label for="first_name">SEKSI</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <textarea id="compose" class="materialize-textarea" length="500" placeholder="Tulis Deskripsi"></textarea>
                        <label for="email">DESKRIPSI</label>
                      </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                          <button class="btn blue waves-effect waves-light center col s12" type="submit" name="action">PERBAHARUI SEKSI</button>
                        </div>
                    </div>
                  </form>
                </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <!-- Modal 2 - Form Ubah -->
    <!--end container-->
    @yield('footer')
    @yield('javascript-library')
</body>

</html>
