<!DOCTYPE html>
<html lang="ba">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>{{   'Sve Za Sport' }}</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
          content="Sve za sport - Bosanskohercegovačka socijalna mreža namijenjena spajanju svih sportista unutar Bosne i Hercegovine">
    <meta name="author" content="Sve Za Sport">
    <meta name="keywords"
          content="sve za sport, vijesti, sport, bih, bosna i hercegovina, rekreacija, szs, svezasport.ba">
@php
    $className = isset($data) ? get_class($data) : 'none';
@endphp

@if($className == "none")
    @include('layouts.default-layout')
@elseif($className == "App\Club")
    @include('layouts.club-layout',$data)
@elseif($className == "App\Event")
    @include('layouts.event-layout',$data)
@elseif($className == "App\Objects")
    @include('layouts.object-layout',$data)
@elseif($className == "App\Player")
    @include('layouts.player-layout',$data)
@elseif($className == "App\School")
    @include('layouts.school-layout',$data)
@elseif($className == "App\Sport")
    @include('layouts.sport-layout',$data)
@elseif($className == "App\Staff")
    @include('layouts.staff-layout',$data)
@elseif($className == "App\Vijest")
    @include('layouts.vijesti-layout',$data)
@endif


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
    {{-- <link href="{{ asset('/css/timepicki.css') }}" rel="stylesheet">--}}
    <link type="text/css" href="{{ asset('/css/bootstrap-timepicker.min.css') }}"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet">
    <link href="{{ asset('/css/style.css?t=') }}{{time()}}" rel="stylesheet">
    <link href="{{ asset('/css/custom.css?t=') }}{{time()}}" rel="stylesheet">
    <link href="{{asset('/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
    <!-- CSS file -->
    <link rel="stylesheet" href="{{asset('css/easy-autocomplete.min.css')}}">

    <!-- Additional CSS Themes file - not required-->
    <link rel="stylesheet" href="{{asset('css/easy-autocomplete.themes.min.css')}}">

    @if (isset($css))
        @foreach ($css as $key => $obj)
            <link rel="stylesheet" href="{{$obj}}?v={{Config::get('app.assets_version')}}">
        @endforeach
    @endif

</head>
<body>
<!-- Facebook script for Sharing -->
<div id="fb-root"></div>
<script>
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!-- Place this tag in your head or just before your close body tag. -->
<script src="https://apis.google.com/js/platform.js" async defer>
    {
        lang: 'hr'
    }
</script>

<div class="site-wrapper clearfix">
    <div class="site-overlay"></div>
    <!-- Header
      ================================================== -->
    <!-- Header Mobile -->
    <div class="header-mobile clearfix" id="header-mobile">
        <div class="header-mobile__logo">
            <a href="{{url('/')}}"><img src="{{asset('images/soccer/logo.png')}}"
                                        srcset="{{asset('assets/images/soccer/logo@2x.png 2x')}}" alt="Sve Za Sport"
                                        class="header-mobile__logo-img"></a>
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
                        <li class="nav-account__item"><a href="{{url('user/logout')}}"><i class="fa fa-sign-out"></i>
                                Odjava</a></li>
                        <li class="nav-account__item"><a href="{{url('new/profile')}}"><i class="fa fa-plus-circle"></i>
                                Objavi</a></li>
                        <li class="nav-account__item"><a href="{{url('/messages')}}"><i class="fa fa-envelope"></i>
                                Poruke</a></li>
                        <li class="nav-account__item"><a href="{{url('me/profile')}}"><i
                                        class="fa fa-user"></i> {{isset(Auth::user()->name) ? Auth::user()->name : 'MOJ SZS'}}
                            </a>
                            <ul class="main-nav__sub">
                                <li><a href="{{url('me/profile')}}"><i class="fa fa-id-card-o"></i> Pregled profila</a>
                                </li>
                                <li><a href="{{url('me/profiles')}}"><i class="fa fa-th-list"></i> Moji profili</a></li>
                                {{-- <li><a href="{{url('me/medals')}}"><i class="fa fa-trophy"></i> Moje medalje</a></li>--}}
                                <li><a href="{{url('me/news')}}"><i class="fa fa-plus-square-o"></i> Moje vijesti</a>
                                </li>
                                {{--<li><a href="{{url('me/grades')}}"><i class="fa fa-star-o"></i> Moje ocjene</a></li>--}}
                                <li><a href="{{url('me/settings')}}"><i class="fa fa-cogs"></i> Postavke</a></li>
                            </ul>
                        </li>

                        <li class="nav-account__item"><a href="{{ url('/me/notifications') }}"><i
                                        class="fa fa-bell-o"></i> Notifikacije <span
                                        class="highlight">{{ !empty($notifications) ? (count($notifications) == 0 ? '' : count($notifications)) : '' }}</span></a>
                            <ul class="main-nav__sub">
                                @if(!empty($notifications))
                                    @if(count($notifications))
                                        @foreach($notifications as $notification)
                                            @if($notification->player_id)
                                                <tr>
                                                    <td class="team-leader__player">
                                                        <div class="team-leader__player-info notifikacija">
                                                            <figure class="team-leader__player-img team-leader__player-img--sm">
                                                                <img src="{{asset('images/athlete_avatars/' . $notification->player->avatar)}}"
                                                                     class="user-picture" alt="">
                                                            </figure>
                                                            <div class="team-leader__player-inner">
                                                                <h5 class="team-leader__player-name">Sportista
                                                                    <b>{{ $notification->player->firstname . ' ' . $notification->player->lastname }}</b>
                                                                    želi postati dio vašeg kluba
                                                                    <b>{{ $notification->club->name }}</b></h5>
                                                                <span class="team-leader__player-position"><i
                                                                            class="fa fa-clock-o"></i> {{ $notification->created_at->diffForHumans() }}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @elseif($notification->staff_id)
                                                <tr>
                                                    <td class="team-leader__player">
                                                        <div class="team-leader__player-info notifikacija">
                                                            <figure class="team-leader__player-img team-leader__player-img--sm">
                                                                <img src="{{asset('images/staff_avatars/' . $notification->staff->avatar)}}"
                                                                     class="user-picture" alt="">
                                                            </figure>
                                                            <div class="team-leader__player-inner">
                                                                <h5 class="team-leader__player-name">Sportski kadar
                                                                    <b>{{ $notification->staff->firstname . ' ' . $notification->staff->lastname }}</b>
                                                                    želi postati dio vašeg kluba
                                                                    <b>{{ $notification->club->name }}</b></h5>
                                                                <span class="team-leader__player-position"><i
                                                                            class="fa fa-clock-o"></i> {{ $notification->created_at->diffForHumans() }}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    @else
                                        <p class="text-center">Nemate novih notifikacija.</p>
                                    @endif
                                @else
                                    <p class="text-center">Nemate novih notifikacija.</p>
                                @endif
                                <a class="notifikacije-button" href="{{ url('/me/notifications') }}">Pregled svih
                                    notifikacija <i class="fa fa-chevron-right"></i></a>
                            </ul>
                        <li class="nav-account__item"><a href="#"><i class="fa fa-globe"></i> Jezik: <span
                                        class="highlight">BH</span></a>
                            <ul class="main-nav__sub">
                                <li><a href="{{url('/')}}"><i class="fa fa-language"></i> Bosanski</a></li>

                            </ul>
                        </li>
                </ul>
                @else
                    <li class="nav-account__item"><a href="{{url('login')}}"><i class="fa fa-sign-in"></i> Prijava</a>
                    </li>
                    <li class="nav-account__item"><a href="{{url('register')}}"><i class="fa fa-user"></i> Registracija</a>
                    </li>
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
                        <a href="{{url('/sports')}}"><img src="{{asset('images/sportovi-fff.png')}}"
                                                          class="df-icon df-icon--soccer-ball"></a>
                        <h6 class="info-block__heading">Svi</h6>
                        <a href="{{url('/sports')}}" class="info-block__link">Sportovi</a>
                    </li>
                    <li class="info-block__item info-block__item--contact-secondary">
                        <a href="{{url('/clubs')}}"><img src="{{asset('images/klubovi-fff.png')}}"
                                                         class="df-icon df-icon--soccer-ball"></a>
                        <h6 class="info-block__heading">Sportski</h6>
                        <a href="{{url('/clubs')}}" class="info-block__link">Klubovi</a>
                    </li>
                    <li class="info-block__item info-block__item--contact-secondary">
                        <a href="{{ url('/schools') }}"><img src="{{asset('images/skole-fff.png')}}"
                                                             class="df-icon df-icon--soccer-ball"></a>
                        <h6 class="info-block__heading">Sportske</h6>
                        <a href="{{ url('/schools') }}" class="info-block__link">Škole</a>
                    </li>
                    <li class="info-block__item info-block__item--contact-secondary">
                        <a href="{{ url('/athletes') }}"><img src="{{asset('images/sportisti-fff.png')}}"
                                                              class="df-icon df-icon--soccer-ball"></a>
                        <h6 class="info-block__heading">BH</h6>
                        <a href="{{ url('/athletes') }}" class="info-block__link">Sportisti</a>
                    </li>
                    <li class="info-block__item info-block__item--contact-secondary">
                        <a href="{{ url('/objects') }}"><img src="{{asset('images/objekti-fff.png')}}"
                                                             class="df-icon df-icon--soccer-ball"></a>
                        <h6 class="info-block__heading">Sportski</h6>
                        <a href="{{ url('/objects') }}" class="info-block__link">Objekti</a>
                    </li>
                    <li class="info-block__item info-block__item--contact-secondary">
                        <a href="{{ url('/staff') }}"><img src="{{asset('images/kadrovi-fff.png')}}"
                                                           class="df-icon df-icon--soccer-ball"></a>
                        <h6 class="info-block__heading">Stručni</h6>
                        <a href="{{ url('/staff') }}" class="info-block__link">Kadrovi</a>
                    </li>
                <!--<li class="info-block__item info-block__item--contact-secondary">
                  <a href="#"><img src="{{asset('images/bus-fff.png')}}" class="df-icon df-icon--soccer-ball"></a>
                  <h6 class="info-block__heading">Sportski</h6>
                  <a href="#" class="info-block__link">Turizam</a>
            </li>-->
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
                        <a href="{{url('/')}}"><img src="{{asset('images/soccer/logo.png')}}"
                                                    srcset="{{asset('images/soccer/logo@2x.png 2x')}}"
                                                    alt="Sve Za Sport" class="header-logo__img"></a>
                    </div>
                    <!-- Header Logo / End -->

                    <!-- Main Navigation -->
                    <nav class="main-nav clearfix">
                        <ul class="main-nav__list">
                            <li class=""><a href="{{ url('events') }}">Kalendar</a></li>
                            <li class=""><a href="{{ url('associations') }}">Savezi</a></li>
                            <li class=""><a target="_blank" href="http://157.230.123.77/">Sportski turizam</a></li>
                            <li class="visible-xs"><a href="www.rekreacija.svezasport.ba">SZS Rekreacija</a></li>
                            <li class="visible-xs"><a href="#">Sportski turizam</a></li>
                        </ul>

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
                            <div class="footer-copyright"><a href="{{url('/')}}">SveZaSport</a> .alpha &nbsp; | &nbsp;
                                &copy; 2017. Sva prava zadržana
                            </div>
                        </div>
                        <div class="col-md-8">
                            <ul class="footer-nav footer-nav--right footer-nav--condensed footer-nav--sm">
                                <li class="footer-nav__item"><a href="{{url('/')}}">Naslovna</a></li>
                                <li class="footer-nav__item"><a href="{{url('/contact')}}">Marketing</a></li>
                                <li class="footer-nav__item"><a href="{{url('/contact')}}">Kontakt</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Secondary / End -->
    </footer>
</div>
<!-- Footer / End -->
<!-- Scripts -->
<!-- Javascript Files
 ================================================== -->
<!-- Core JS -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('js/core-min.js') }}"></script>


<script src="{{mix('js/app.js')}}"></script>

<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
{{--<script type="text/javascript" src={{asset('js/bootstrap.min.js')}}></script>--}}

{{--<script type="text/javascript" src={{asset('js/jquery-1.8.3.min.js')}}></script>--}}

@if(isset($vendorScripts))
    @foreach($vendorScripts as $script)
        <script src="{{$script}}" type="text/javascript"></script>
    @endforeach
@endif
<!-- Template JS -->
<script type="text/javascript" src={{asset('js/validate.js')}}></script>
<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.13.1/additional-methods.js"></script>
<script type="text/javascript">
    $('#registerForm').validate({
            rules: {
                password: "required",
                password_confirmation: {
                    equalTo: "#password"
                }
            }
        }
    );
</script>
<script src="{{ asset('js/init.js') }}"></script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmi40ZDQOH7C-IoehR0_DSk0QrMdXrPi4&libraries=places&region=BA&language=hr"></script>
<script>
    Element.prototype.remove = function () {
        this.parentElement.removeChild(this);
    };
    NodeList.prototype.remove = HTMLCollection.prototype.remove = function () {
        for (var i = this.length - 1; i >= 0; i--) {
            if (this[i] && this[i].parentElement) {
                this[i].parentElement.removeChild(this[i]);
            }
        }
    };

    function initAutocomplete() {
        autocomplete1 = new google.maps.places.Autocomplete(document.getElementById('city'), {types: ['geocode']});
        autocomplete1.addListener('place_changed', function () {
            var place = autocomplete1.getPlace();
            var lat = place.geometry.location.lat();
            var lng = place.geometry.location.lng();

            var lat_input = document.getElementById('latitude');
            var lng_input = document.getElementById('longitude');

            lat_input.value = lat;
            lng_input.value = lng;

            if (!place.geometry) {
                lat_input.value = '';
                lng_input.value = '';
                window.alert("Nismo mogli pronaći traženo mjesto!");
                return;
            }
        });

    }
</script>
<script src="{{ asset('js/xregexp-all.js') }}"></script>
<script src="{{ asset('/js/timepicki.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/locale/bs.js"></script>
<script src="{{ asset('js/custom.js?t='.time()) }}"></script>

@if(str_contains(Request::url(),'messages'))
    <script src="{{asset('js/jquery.easy-autocomplete.min.js')}}"></script>
    <script>
        var options = {

            url: window.location.protocol + '//' + window.location.hostname + "/autocomplete-users",
            getValue: "email",
            list: {
                match: {
                    enabled: true
                },
                onSelectItemEvent: function () {
                    var value = $("#primalac").getSelectedItemData().id; //get the id associated with the selected value
                    $("#recipient").val(value).trigger("change"); //copy it to the hidden field
                }
            },

            theme: "square"
        };

        $("#primalac").easyAutocomplete(options);
    </script>
@endif
<script type="text/javascript" src="{{asset('/js/bootstrap-datetimepicker.min.js')}}" charset="UTF-8"></script>
<script type="text/javascript" src="{{asset('/js/bootstrap-datetimepicker.hr.js')}}" charset="UTF-8"></script>
<script type="text/javascript" src="{{asset('/js/bootstrap-timepicker.min.js')}}"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124046232-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-124046232-1');

    $('#timepicker').timepicker({
        minuteStep: 5,
        showMeridian: false
    });

    $('.form_date').datetimepicker({
        language: 'hr',
        weekStart: 1,
        todayBtn: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0,
        endDate: new Date()
    });
    $('.form_date_event').datetimepicker({
        language: 'hr',
        weekStart: 1,
        todayBtn: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0,
        startDate: new Date()
    });

</script>
@if(isset($scripts))
    @foreach($scripts as $script)
        <script src="{{$script}}" type="text/javascript"></script>
    @endforeach
@endif

@stack('scripts-end')

</body>
</html>
