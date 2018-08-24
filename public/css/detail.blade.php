<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      @include('content.head')

      @yield('head')

  </head>
  <body style="height: 100% important;">
      @include('content.navbar')

      @yield('navbar')
      <section id="portofolio-page">
          <div class="container-fluid" style="padding: 100px;">
              <div class="row">
                  <div class="col-md-8">
                      <p class="title-portofolio">{{$portofolio->nama}}</p>
                      <p class="subtitle-portofolio color-grey">Aplikasi untuk <b>{{$portofolio->client}}</b> / <b>{{$portofolio->platform}}</b></p><br>
                      <div class="img-portofolio"><img src="{{asset('img/portofolio/'.$portofolio->gambar)}}" class="img-fluid"></div>
                      <div class="description">
                          <p class="big-title-3">Deskripsi Aplikasi</p>
                          <hr class="hr-1">
                          <div class="subtitle-portofolio color-grey" align="justify">Saya berperan sebagai <b>{{$portofolio->peran}}</b><br>{!!$portofolio->deskripsi!!}</div>
                              <p class="big-title-3">Teknologi Aplikasi</p>
                              <hr class="hr-1">
                              <div class="row">
                                  @foreach($portofoliotech as $portofoliotech)
                                  <div class="subtitle-portofolio col-md-1" style="margin: 0px;">
                                    <span class="{{$portofoliotech->technology}} color-grey" style="font-size: 50px;"></span>
                                  </div>
                                  @endforeach
                              </div>
                      </div>
                  </div>

                  <div class="col-md-4">
                      <p class="title-portofolio">Portofolio Lainya</p>
                      <hr class="hr-1">
                      @foreach($recent as $recent)
                      <div onclick="window.location.href='{{url('/portofolio/'.$recent->id)}}">
                          <div class="img-portofolio"><img src="{{asset('img/portofolio/'.$recent->gambar)}}" class="img-fluid"></div>
                          <div class="description" style="margin-top: -10px;">
                              <a href="{{url('/portofolio/'.$recent->id)}}" class="subtitle-portofolio recent">{{$recent->nama}}</p>
                          </div>
                      </div>
                      <br>
                      @endforeach
                  </div>
              </div>
          </div>
      </section>
      @include('content.footer')
      @yield('footer')
      @yield('javascript-lib')
  </body>
</html>
