@extends('layouts.app')

@section('content')

  <div class="site-wrapper clearfix">
    <div class="site-overlay"></div>
 <!-- Header / End -->
    
    <!-- Pushy Panel - Dark -->
    <aside class="pushy-panel pushy-panel--dark">
      <div class="pushy-panel__inner">
        <header class="pushy-panel__header">
          <div class="pushy-panel__logo">
            <a href="index.php"><img src="{{asset('images/soccer/logo.png')}}" srcset="assets/images/soccer/logo@2x.png 2x" alt="Alchemists"></a>
          </div>
        </header>
        <div class="pushy-panel__content">
    
          <a href="#" class="push-rekreacija btn-social-counter" target="_blank">
              <div class="btn-social-counter__icon">
                <i class="fa fa-futbol-o"></i>
              </div>
              <h6 class="btn-social-counter__title">SZS Rekreacija</h6>
            </a>

            <a href="#" class="push-aplikacije btn-social-counter" target="_blank">
              <div class="btn-social-counter__icon">
                <i class="fa fa-file"></i>
              </div>
              <h6 class="btn-social-counter__title">SZS Aplikacije</h6>
            </a>

            <a href="#" class="push-turizam btn-social-counter" target="_blank">
              <div class="btn-social-counter__icon">
                <i class="fa fa-bus"></i>
              </div>
              <h6 class="btn-social-counter__title">Sportski turizam</h6>
            </a>
    
        </div>
        <a href="#" class="pushy-panel__back-btn"></a>
      </div>
    </aside>
    <!-- Pushy Panel - Dark / End -->
   
      <!-- Page Heading
    ================================================== -->
    <div class="page-heading">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h1 class="page-heading__title"><i class="fa fa-user-circle fa-2x"></i></h1>
            <h1 class="page-heading__title">Moj profil</h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li class="registracija-podnaslov">Sve za sport</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Team Pages Filter -->
        <nav class="content-filter">
          <div class="container">
            <a href="#" class="content-filter__toggle"></a>
            <ul class="content-filter__list">
              <li class="content-filter__item content-filter__item--active"><a href="{{url('me/profile')}}" class="content-filter__link"><i class="fa fa-address-card-o"></i><small>Pregled</small>Profila</a></li>
              <li class="content-filter__item "><a href="{{url('me/profiles')}}" class="content-filter__link"><i class="fa fa-th-list"></i><small>Moji</small>Profili</a></li>
              <li class="content-filter__item "><a href="{{url('me/news')}}" class="content-filter__link"><i class="fa fa-plus-square-o"></i><small>Moje</small>Vijesti</a></li>
{{--
              <li class="content-filter__item "><a href="{{url('me/grades')}}" class="content-filter__link"><i class="fa fa-star-o"></i><small>Moje</small>Ocjene</a></li>
--}}
              <li class="content-filter__item "><a href="{{url('me/settings')}}" class="content-filter__link"><i class="fa fa-cogs"></i><small>Postavke</small>Profila</a></li>
            </ul>
          </div>
        </nav>
        <!-- Team Pages Filter / End -->

    <!-- Content
    ================================================== -->
      <div class="site-content">
      <div class="container">
    
    <div class="alert alert-warning">
          <strong>Ovaj pregled i statistiku vidite samo Vi. Ne preporučujemo da svoje podatke dijelite sa drugim korisnicima.</strong>
        </div>

        <div class="row">

          <div class="col-md-4">

            <!-- Osnovne informacije -->
            <div class="card">
              <div class="card__header">
                <h4><i class="fa fa-address-card-o"></i> Osnovne informacije</h4>
              </div>
              <div class="card__content text-center">

                <div class="form-group__avatar">
                  <img src="{{ isset(Auth::user()->avatar) ? asset('images/avatars/'.Auth::user()->avatar) : asset('images/default_avatar.png')}}" alt="">
                    <div class="form-group__label">
                      <h6 class="profil-ime">{{Auth::user()->name}}</h6>
                      <span class="profil-id"><i class="fa fa-tag"></i> {{Auth::user()->id}}</span>
                    </div>
                </div>
                {{--<p class="info-racun"><i class="fa fa-check-circle"></i> Premium račun</p>--}}
                {{--<p class="premium-info"><i class="fa fa-clock-o"></i> Premium ističe za 15 dana</p>--}}
                <button type="button" class="btn btn-default btn-xs disabled">Aktiviraj Premium Račun</button> <p class="premium-info"><i class="fa fa-database"></i> 1000</p>
              </div>
            </div>

            <!-- Osnovne informacije kraj -->

            <a href="{{url('/profile/new')}}" class="objavi-profil1 btn-social-counter" target="_blank">
              <div class="btn-social-counter__icon">
                <i class="fa fa-plus"></i>
              </div>
              <h6 class="btn-social-counter__title">Objavi novi profil</h6>
            </a>

            <a href="{{url('news/new')}}" class="objavi-profil2 btn-social-counter" target="_blank">
              <div class="btn-social-counter__icon">
                <i class="fa fa-plus-square-o"></i>
              </div>
              <h6 class="btn-social-counter__title">Objavi novu vijest</h6>
            </a>

            <!-- SZS Kredit -->

            <!--<div class="card">
              <div class="card__header">
                <h4><i class="fa fa-database"></i> SZS Kredit</h4>
              </div>
              <div class="card__content text-center">
                <h2 class="profil-counter">750</h2>
                <p class="counter-info">Osvojenih kredita</p>
              </div>
            </div>-->

            <!-- SZS Kredit kraj -->

            <!-- Recenzije -->

            <!--<div class="card">
              <div class="card__header">
                <h4><i class="fa fa-star"></i> Ocjene</h4>
              </div>
              <div class="card__content text-center">
                <h2 class="profil-counter">314</h2>
                <p class="counter-info">Objavljenih ocjena</p>
              </div>
            </div>-->

            <!-- Recenzije kraj -->

            <!-- Vijesti -->

            <!--<div class="card">
              <div class="card__header">
                <h4><i class="fa fa-plus-square-o"></i> Vijesti</h4>
              </div>
              <div class="card__content text-center">
                <h2 class="profil-counter">42</h2>
                <p class="counter-info">Objavljenih vijesti</p>
              </div>
            </div>-->
            <!-- Vijesti kraj -->

            <!-- Spašeni profili -->

            <!--<div class="card">
              <div class="card__header">
                <h4><i class="fa fa-bookmark-o"></i> Spašeni profili</h4>
              </div>
              <div class="card__content text-center">
                <h2 class="profil-counter">150</h2>
                <p class="counter-info">Spašenih profila</p>
              </div>
            </div>-->

            <!-- Spašeni profili kraj -->
          </div>

          <div class="col-md-8">

            <!-- Personal Information -->
            <div class="card card--lg">
              <div class="card__header">
                <h4><i class="fa fa-check-circle-o"></i> Aktivni profili</h4>
              </div>
              <div class="card__content">
                <ul class="team-stats-box aktivni-profili">
                  <li class="team-stats__item team-stats__item--clean">
                    <div class="team-stats__icon team-stats__icon--circle">
                      <img src="{{asset('images/klubovi-fff.png')}}" alt="" class="team-stats__icon-primary">
                    </div>
                    <div class="team-stats__value">35/40</div>
                    <div class="team-stats__label label-stats-profil">Aktivni klubovi</div>
                    <div class="team-stats__label">
                      <div class="progress-stats">
                        <div class="progress">
                          <div class="progress__bar progress__bar-width-80" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                    </div>
                  </li>
                  <li class="team-stats__item team-stats__item--clean">
                    <div class="team-stats__icon team-stats__icon--circle">
                      <img src="{{asset('images/skole-fff.png')}}" alt="" class="team-stats__icon-primary">
                    </div>
                    <div class="team-stats__value">35/40</div>
                    <div class="team-stats__label label-stats-profil">Aktivne škole</div>
                    <div class="team-stats__label">
                      <div class="progress-stats">
                        <div class="progress">
                          <div class="progress__bar progress__bar-width-80" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                    </div>
                  </li>
                  <li class="team-stats__item team-stats__item--clean">
                    <div class="team-stats__icon team-stats__icon--circle">
                      <img src="{{asset('images/sportisti-fff.png')}}" alt="" class="team-stats__icon-primary">
                    </div>
                    <div class="team-stats__value">11/15</div>
                    <div class="team-stats__label label-stats-profil">Aktivni sportisti</div>
                    <div class="team-stats__label">
                      <div class="progress-stats">
                        <div class="progress">
                          <div class="progress__bar progress__bar-width-90" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                    </div>
                  </li>
                </ul>
                <ul class="team-stats-box aktivni-profili">
                  <li class="team-stats__item team-stats__item--clean">
                    <div class="team-stats__icon team-stats__icon--circle">
                      <img src="{{asset('images/objekti-fff.png')}}" alt="" class="team-stats__icon-primary">
                    </div>
                    <div class="team-stats__value">22/25</div>
                    <div class="team-stats__label label-stats-profil">Aktivni objekti</div>
                    <div class="team-stats__label">
                      <div class="progress-stats">
                        <div class="progress">
                          <div class="progress__bar progress__bar-width-90" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                    </div>
                  </li>
                  <li class="team-stats__item team-stats__item--clean">
                    <div class="team-stats__icon team-stats__icon--circle">
                      <img src="{{asset('images/oprema-fff.png')}}" alt="" class="team-stats__icon-primary">
                    </div>
                    <div class="team-stats__value">10/15</div>
                    <div class="team-stats__label label-stats-profil">Aktivne Vijesti</div>
                    <div class="team-stats__label">
                      <div class="progress-stats">
                        <div class="progress">
                          <div class="progress__bar progress__bar-width-90" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                    </div>
                  </li>
                  <li class="team-stats__item team-stats__item--clean">
                    <div class="team-stats__icon team-stats__icon--circle">
                      <img src="{{asset('images/kadrovi-fff.png')}}" alt="" class="team-stats__icon-primary">
                    </div>
                    <div class="team-stats__value">15/20</div>
                    <div class="team-stats__label label-stats-profil">Aktivni kadrovi</div>
                    <div class="team-stats__label">
                      <div class="progress-stats">
                        <div class="progress">
                          <div class="progress__bar progress__bar-width-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Personal Information / End -->
            <div class="card card--lg">
              <div class="card__header card__header--has-btn">
                <h4><i class="fa fa-plus-square-o"></i> Moje zadnje vijesti</h4>
                <a href="moje-vijesti.php" class="btn btn-default btn-outline btn-xs card-header__button">Pregled svih</a>
              </div>
              <div class="widget__content card__content">
                <ul class="posts posts--simple-list">
                  <li class="posts__item posts__item--category-2">
                    <figure class="posts__thumb"><img class="slika-vijesti-01" src="{{asset('images/vijesti-slika-test.jpg')}}" alt="">
                    </figure>
                    <div class="posts__inner">
                      <div class="posts__cat">
                        <span class="label posts__cat-label">FK Sve Za Sport</span>
                      </div>
                      <h6 class="posts__title"><a href="#">FK Sve Za Sport je na domaćem terenu ostvario ubjedljivu pobjedu nad FK All For Sport</a></h6>
                      <time datetime="2016-08-23" class="posts__date">23.10.2017.</time>
                    </div>
                  </li>
          <li class="posts__item posts__item--category-2">
                    <figure class="posts__thumb"><img class="slika-vijesti-01" src="{{asset('images/vijesti-slika-test.jpg')}}" alt="">
                    </figure>
                    <div class="posts__inner">
                      <div class="posts__cat">
                        <span class="label posts__cat-label">FK Sve Za Sport</span>
                      </div>
                      <h6 class="posts__title"><a href="#">FK Sve Za Sport je na domaćem terenu ostvario ubjedljivu pobjedu nad FK All For Sport</a></h6>
                      <time datetime="2016-08-23" class="posts__date">23.10.2017.</time>
                    </div>
                  </li>
          <li class="posts__item posts__item--category-2">
                    <figure class="posts__thumb"><img class="slika-vijesti-01" src="{{asset('images/vijesti-slika-test.jpg')}}" alt="">
                    </figure>
                    <div class="posts__inner">
                      <div class="posts__cat">
                        <span class="label posts__cat-label">FK Sve Za Sport</span>
                      </div>
                      <h6 class="posts__title"><a href="#">FK Sve Za Sport je na domaćem terenu ostvario ubjedljivu pobjedu nad FK All For Sport</a></h6>
                      <time datetime="2016-08-23" class="posts__date">23.10.2017.</time>
                    </div>
                  </li>
          
                </ul>
              </div>
            </aside>
    </div>


          </div>
        </div>
      </div>
    </div>

    <!-- Content / End -->

  @endsection