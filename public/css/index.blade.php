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
          <p class="big-title color-navy text-center" style="margin-top: 40px;">Portofolio</p>
          <div class="container-fluid bg-color-wheat" style="padding: 50px;">
              <div class="row">
                  @foreach($portofolios as $portofolio)
                  <div class="col-lg-4 col-md-6 col-sm-12" style="padding: 10px; margin-bottom: 50px; height: 250px;">
                      <div class="hovereffect">
                          <img class="img-fluid" src="{{asset('img/portofolio/'.$portofolio->gambar)}}" alt="">
                          <div class="overlay">
                              <h2>{{$portofolio->nama}}</h2>
                              <a class="info" href="{{url('/portofolio/'.$portofolio->id)}}">Detail</a>
                           </div>
                      </div>
                      <p class="subtitle-portofolio text-center"><b>{{$portofolio->nama}}</b></p>
                  </div>
                  @endforeach
              </div>
          </div>

          <div class="text-center pagination">
          {{ $portofolios->links() }}
          </div>
      </section>
      @include('content.footer')
      @yield('footer')
      @yield('javascript-lib')
  </body>
</html>
