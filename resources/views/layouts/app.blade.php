<!DOCTYPE html>
<html lang="ba">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <title>{{ config('app.name', 'SveZaSport.ba') }}</title>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Alchemists - Sports News HTML Template">
  <meta name="author" content="Dan Fisher">
  <meta name="keywords" content="Sports News HTML Template">

  <!-- Favicons
  ================================================== -->
  <link rel="shortcut icon" href="{{asset('assets/images/soccer/favicons/favicon.ico')}}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/images/soccer/favicons/favicon-120.png')}}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/images/soccer/favicons/favicon-152.png')}}">

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">

  <!-- Google Web Fonts
  ================================================== -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CSource+Sans+Pro:400,700" rel="stylesheet">

  <!-- CSS
  ================================================== -->

  <!-- Vendor CSS -->
  <link href="{{ asset('/fonts/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/magnific-popup/dist/magnific-popup.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/slick/slick.css') }}" rel="stylesheet">
  <link href="{{ asset('css/selectize.css') }}" rel="stylesheet">



  <!-- Template CSS-->
  <link href="{{ asset('/css/datepicker.css?t=44') }}" rel="stylesheet">
  <link href="{{ asset('/css/style.css?t=') }}{{time()}}" rel="stylesheet">
  <link href="{{ asset('/css/custom.css?t=') }}{{time()}}" rel="stylesheet">

</head>
<body>
  <!-- Header
    ================================================== -->

    <!-- Header Mobile -->
    <div class="header-mobile clearfix" id="header-mobile">
      <div class="header-mobile__logo">
        <a href="{{url('/')}}"><img src="{{asset('images/soccer/logo.png')}}" srcset="{{asset('assets/images/soccer/logo@2x.png 2x')}}" alt="Sve Za Sport" class="header-mobile__logo-img"></a>
      </div>
      <div class="header-mobile__inner">
        <a id="header-mobile__toggle" class="burger-menu-icon"><span class="burger-menu-icon__line"></span></a>
        <span class="header-mobile__search-icon" id="header-mobile__search-icon"></span>
      </div>
    </div>
  @include('flash::message')
    <!-- Header Desktop -->
    <header class="header">

      <!-- Header Top Bar -->
      <div class="header__top-bar clearfix">
        <div class="container">

          <!-- Account Navigation -->
          <ul class="nav-account">
            @if(isset(Auth::user()->name))
      <li class="nav-account__item"><a href="{{url('user/logout')}}"><i class="fa fa-sign-out"></i> Odjava</a></li>
      <li class="nav-account__item"><a href="{{url('profile/new')}}"><i class="fa fa-plus-circle"></i> Objavi</a></li>
      <li class="nav-account__item"><a href="{{url('me/profile')}}"><i class="fa fa-user"></i> {{isset(Auth::user()->name) ? Auth::user()->name : 'MOJ SZS'}}</a>
              <ul class="main-nav__sub">
                <li><a href="{{url('me/profile')}}"><i class="fa fa-id-card-o"></i> Pregled profila</a></li>
                <li><a href="{{url('me/profiles')}}"><i class="fa fa-th-list"></i> Moji profili</a></li>
        <li><a href="{{url('me/medals')}}"><i class="fa fa-trophy"></i> Moje medalje</a></li>
                <li><a href="{{url('me/news')}}"><i class="fa fa-plus-square-o"></i> Moje vijesti</a></li>
                <li><a href="{{url('me/grades')}}"><i class="fa fa-star-o"></i> Moje ocjene</a></li>
                <li><a href="{{url('me/settings')}}"><i class="fa fa-cogs"></i> Postavke</a></li>
                </ul>
            </li>
      <li class="nav-account__item"><a href="inbox.php"><i class="fa fa-envelope-o"></i> Poruke <span class="highlight">2</span></a>
              <ul class="main-nav__sub">
                <li><a href="{{url('messages/inbox')}}"><i class="fa fa-download"></i> Primljene</a></li>
                <li><a href="{{url('messages/outbox')}}"><i class="fa fa-upload"></i> Poslane</a></li>
                </ul>
            </li>
      <li class="nav-account__item"><a href="notifikacije.php"><i class="fa fa-bell-o"></i> Notifikacije <span class="highlight">5</span></a>
              <ul class="main-nav__sub">
        <tr>
                  <td class="team-leader__player">
                    <div class="team-leader__player-info notifikacija">
                     <figure class="team-leader__player-img team-leader__player-img--sm">
                        <img src="{{asset('images/tarik.jpg')}}" alt="">
                       </figure>
                       <div class="team-leader__player-inner">
                        <h5 class="team-leader__player-name">Tarik Jašarević vas je spomenuo u svom novom članku</h5>
                        <span class="team-leader__player-position"><i class="fa fa-clock-o"></i> prije 45 min.</span>
                     </div>
                    </div>
                  </td>
                </tr>
        <tr>
                  <td class="team-leader__player">
                    <div class="team-leader__player-info notifikacija">
                     <figure class="team-leader__player-img team-leader__player-img--sm">
                        <img src="{{asset('images/tarik.jpg')}}" alt="">
                       </figure>
                       <div class="team-leader__player-inner">
                        <h5 class="team-leader__player-name">Tarik Jašarević vas je spomenuo u svom novom članku</h5>
                        <span class="team-leader__player-position"><i class="fa fa-clock-o"></i> prije 45 min.</span>
                     </div>
                    </div>
                  </td>
                </tr>
        <tr>
                  <td class="team-leader__player">
                    <div class="team-leader__player-info notifikacija">
                     <figure class="team-leader__player-img team-leader__player-img--sm">
                        <img src="{{asset('images/tarik.jpg')}}" alt="">
                       </figure>
                       <div class="team-leader__player-inner">
                        <h5 class="team-leader__player-name">Tarik Jašarević vas je spomenuo u svom novom članku</h5>
                        <span class="team-leader__player-position"><i class="fa fa-clock-o"></i> prije 45 min.</span>
                     </div>
                    </div>
                  </td>
                </tr>
        <tr>
                  <td class="team-leader__player">
                    <div class="team-leader__player-info notifikacija">
                     <figure class="team-leader__player-img team-leader__player-img--sm">
                        <img src="{{asset('images/tarik.jpg')}}" alt="">
                       </figure>
                       <div class="team-leader__player-inner">
                        <h5 class="team-leader__player-name">Tarik Jašarević vas je spomenuo u svom novom članku</h5>
                        <span class="team-leader__player-position"><i class="fa fa-clock-o"></i> prije 45 min.</span>
                     </div>
                    </div>
                  </td>
          <td>
          <a class ="notifikacije-button" href="notifikacije.php">Pregled svih notifikacija <i class="fa fa-chevron-right"></i></a>
          </td>
                </tr>
                </ul>
            </li>
            <li class="nav-account__item"><a href="#"><i class="fa fa-globe"></i> Jezik: <span class="highlight">BH</span></a>
              <ul class="main-nav__sub">
                <li><a href="www.svezasport.ba"><i class="fa fa-language"></i> Bosanski</a></li>
                  <li><a href="www.svezasport.ba/en/index.php"><i class="fa fa-language"></i> Engleski</a></li>
                </ul>
            </li>
          </ul>
          @else
            <li class="nav-account__item"><a href="{{url('login')}}"><i class="fa fa-sign-out"></i> Prijava</a></li>
              <li class="nav-account__item"><a href="{{url('register')}}"><i class="fa fa-sign-out"></i> Registracija</a></li>
          @endif
          <!-- Account Navigation / End -->

        </div>
      </div>
      <!-- Header Top Bar / End -->

      <!-- Header Secondary -->
      <div class="header__secondary">
        <div class="container">
          <ul class="info-block info-block--header">
            <li class="info-block__item info-block__item--contact-secondary">
              <a href="sportovi.php"><img src="{{asset('images/sportovi-fff.png')}}" class="df-icon df-icon--soccer-ball"></a>
              <h6 class="info-block__heading">Svi</h6>
              <a href="sportovi.php" class="info-block__link">Sportovi</a>
            </li>
            <li class="info-block__item info-block__item--contact-secondary">
              <a href="{{url('/clubs')}}"><img src="{{asset('images/klubovi-fff.png')}}" class="df-icon df-icon--soccer-ball"></a>
              <h6 class="info-block__heading">Sportski</h6>
              <a href="{{url('/clubs')}}" class="info-block__link">Klubovi</a>
            </li>
      <li class="info-block__item info-block__item--contact-secondary">
              <a href="/schools"><img src="{{asset('images/skole-fff.png')}}" class="df-icon df-icon--soccer-ball"></a>
              <h6 class="info-block__heading">Sportske</h6>
              <a href="/schools" class="info-block__link">Škole</a>
            </li>
            <li class="info-block__item info-block__item--contact-secondary">
              <a href="/athletes"><img src="{{asset('images/sportisti-fff.png')}}" class="df-icon df-icon--soccer-ball"></a>
              <h6 class="info-block__heading">BH</h6>
              <a href="/athletes" class="info-block__link">Sportisti</a>
            </li>
            <li class="info-block__item info-block__item--contact-secondary">
              <a href="/objects"><img src="{{asset('images/objekti-fff.png')}}" class="df-icon df-icon--soccer-ball"></a>
              <h6 class="info-block__heading">Sportski</h6>
              <a href="/objects" class="info-block__link">Objekti</a>
            </li>
            <li class="info-block__item info-block__item--contact-secondary">
              <a href="/staff"><img src="{{asset('images/kadrovi-fff.png')}}" class="df-icon df-icon--soccer-ball"></a>
              <h6 class="info-block__heading">Stručni</h6>
              <a href="/staff" class="info-block__link">Kadrovi</a>
            </li>
            <li class="info-block__item info-block__item--contact-secondary">
                  <a href="#"><img src="{{asset('images/kadrovi-fff.png')}}" class="df-icon df-icon--soccer-ball"></a>
                  <h6 class="info-block__heading">Sportski</h6>
                  <a href="#" class="info-block__link">Turizam</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Header Secondary / End -->

      <!-- Header Primary -->
      <div class="header__primary">
        <div class="container">
          <div class="header__primary-inner">

            <!-- Header Logo -->
            <div class="header-logo">
              <a href="{{url('/')}}"><img src="{{asset('images/soccer/logo.png')}}" srcset="{{asset('images/soccer/logo@2x.png 2x')}}" alt="Sve Za Sport" class="header-logo__img"></a>
            </div>
            <!-- Header Logo / End -->

            <!-- Main Navigation -->
            <nav class="main-nav clearfix">
              <ul class="main-nav__list">
                <li class=""><a href="edukacija.php">Edukacija</a></li>
                <li class=""><a href="kalendar.php">Kalendar</a></li>
                <li class=""><a href="reprezentacije.php">Reprezentacije BiH</a></li>
                <li class=""><a href="dijaspora.php">Dijaspora</a></li>
                <li class=""><a href="szs-fondacija.php">SZS Fondacija</a></li>
                <li class="visible-xs"><a href="www.rekreacija.svezasport.ba">SZS Rekreacija</a></li>
                <li class="visible-xs"><a href="aplikacije.php">SZS Aplikacije</a></li>
                <li class="visible-xs"><a href="sportski-turizam.php">Sportski turizam</a></li>


              <!-- Pushy Panel Toggle -->
              <a href="#" class="pushy-panel__toggle">
                <span class="pushy-panel__line"></span>
              </a>
              <!-- Pushy Panel Toggle / Eng -->
            </nav>
            <!-- Main Navigation / End -->
          </div>
        </div>
      </div>
      <!-- Header Primary / End -->

    </header>
    <!-- Header / End -->
    @yield('content')
<!-- Footer
    ================================================== -->
    <footer id="footer" class="footer">

      <!-- Footer Widgets -->
      <div class="footer-widgets">
        <!-- Sponsors -->
        <div class="container">
          <div class="sponsors">
            <ul class="sponsors-logos">
              <li class="sponsors__item">
                <a href="#"><img src="{{asset('images/samples/brojler.png')}}" alt=""></a>
              </li>
              <li class="sponsors__item">
                <a href="#"><img src="{{asset('images/samples/po-komitet.png')}}" alt=""></a>
              </li>
              <li class="sponsors__item">
                <a href="#"><img src="{{asset('images/samples/semko.png')}}" alt=""></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="container">
          <div class="sponsors">
            <ul class="sponsors-logos">
              <li class="sponsors__item">
                <a href="#"><img src="{{asset('images/samples/kanton-sarajevo.png')}}" alt=""></a>
              </li>
              <li class="sponsors__item">
                <a href="#"><img src="{{asset('images/samples/grad-sarajevo.png')}}" alt=""></a>
              </li>
              <li class="sponsors__item">
                <a href="#"><img src="{{asset('images/samples/stari-grad.png')}}" alt=""></a>
              </li>
              <li class="sponsors__item">
                <a href="#"><img src="{{asset('images/samples/opcina-centar.png')}}" alt=""></a>
              </li>
              <li class="sponsors__item">
                <a href="#"><img src="{{asset('images/samples/opcina-hadzici.png')}}" alt=""></a>
              </li>
              <li class="sponsors__item">
                <a href="#"><img src="{{asset('images/samples/opcina-ilijas.png')}}" alt=""></a>
              </li>
              <li class="sponsors__item">
                <a href="#"><img src="{{asset('images/samples/opcina-novigrad.png')}}" alt=""></a>
              </li>
              <li class="sponsors__item">
                <a href="#"><img src="{{asset('images/samples/opcina-vogosca.png')}}" alt=""></a>
              </li>
            </ul>
          </div>
        </div>
        <!-- Sponsors / End -->

      </div>
      <!-- Footer Widgets / End -->

      <!-- Footer Secondary -->
      <div class="footer-secondary">
        <div class="container">
          <div class="footer-secondary__inner">
            <div class="row">
              <div class="col-md-4">
                <div class="footer-copyright"><a href="index.php">SveZaSport</a> .alpha &nbsp; | &nbsp; &copy; 2017. Sva prava zadržana</div>
              </div>
              <div class="col-md-8">
                <ul class="footer-nav footer-nav--right footer-nav--condensed footer-nav--sm">
                  <li class="footer-nav__item"><a href="#">Naslovna</a></li>
                  <li class="footer-nav__item"><a href="#">Impressum</a></li>
                  <li class="footer-nav__item"><a href="#">Naša misija</a></li>
                  <li class="footer-nav__item"><a href="#">Feedback</a></li>
                  <li class="footer-nav__item"><a href="#">Konsalting</a></li>
                  <li class="footer-nav__item"><a href="#">Marketing</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer Secondary / End -->
    </footer>
    <!-- Footer / End -->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
     <!-- Javascript Files
      ================================================== -->
      <!-- Core JS -->
      <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
      <script src="{{ asset('js/core-min.js') }}"></script>

<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>


      <!-- Template JS -->
      <script type="text/javascript" src={{URL::asset('js/validate.js')}}></script>
<script type="text/javascript">
  $('#registerForm').validate({
      rules: {
        password: "required",
        password_confirmation: {
          equalTo: "#password"
        }
      }}
    );
</script>
      <script src="{{ asset('js/init.js') }}"></script>
      <script>
       function initAutocomplete() {
           autocomplete1 = new google.maps.places.Autocomplete(document.getElementById('mjesto'), {types: ['geocode']});
           autocomplete1.addListener('place_changed', function () {
               var place = autocomplete1.getPlace();
               if (!place.geometry) {
                   window.alert("Nismo mogli pronaći traženo mjesto!");
                   return;
               }
           });
           
       }
       function adresaAutoComp() {
           autocomplete1 = new google.maps.places.Autocomplete(document.getElementById('adresa'), {types: ['geocode']});
           autocomplete1.addListener('place_changed', function () {
               var place = autocomplete1.getPlace();
               if (!place.geometry) {
                   window.alert("Nismo mogli pronaći traženo mjesto!");
                   return;
               }
           });
           
       }
   </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAO6kDxfB19QkynnAGz5nlmX6Kbrb_pAsQ&libraries=places&region=BA&language=hr"></script>
   
      <script src="{{ asset('js/custom.js?t='.time()) }}"></script>
</body>
</html>
