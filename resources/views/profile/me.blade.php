@extends('layouts.app')

@section('content')

  <div class="site-wrapper clearfix">
    <div class="site-overlay"></div>
 <!-- Header / End -->

  @include('includes.pushy-panel')
   
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
              <div style="min-height: 5em;" class="card__content text-center">

                <div class="form-group__avatar">
                  <img src="{{ isset(Auth::user()->avatar) ? asset('images/avatars/'.Auth::user()->avatar) : asset('images/default_avatar.png')}}" alt="">
                    <div class="form-group__label">
                      <h6 class="profil-ime">{{Auth::user()->name}}</h6>
                      <span class="profil-id"><i class="fa fa-tag"></i> {{Auth::user()->id}}</span>
                    </div>
                </div>
                {{--<p class="info-racun"><i class="fa fa-check-circle"></i> Premium račun</p>--}}
                {{--<p class="premium-info"><i class="fa fa-clock-o"></i> Premium ističe za 15 dana</p>--}}
                {{--<button type="button" class="btn btn-default btn-xs disabled">Aktiviraj Premium Račun</button> <p class="premium-info"><i class="fa fa-database"></i> 1000</p>--}}
                <span></span>
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
                    <div class="team-stats__value">{{ $active->clubs }}/40</div>
                    <div class="team-stats__label label-stats-profil">Aktivni klubovi</div>
                    <div class="team-stats__label">
                      <div class="progress-stats">
                        <div class="progress">
                          <div class="progress__bar progress__bar-width-{{ ceil((($active->clubs / 40) * 100) / 5) * 5  }}" role="progressbar" aria-valuenow="{{ ceil((($active->clubs / 40) * 100) / 5) * 5  }}" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                    </div>
                  </li>
                  <li class="team-stats__item team-stats__item--clean">
                    <div class="team-stats__icon team-stats__icon--circle">
                      <img src="{{asset('images/skole-fff.png')}}" alt="" class="team-stats__icon-primary">
                    </div>
                    <div class="team-stats__value">{{ $active->schools }}/40</div>
                    <div class="team-stats__label label-stats-profil">Aktivne škole</div>
                    <div class="team-stats__label">
                      <div class="progress-stats">
                        <div class="progress">
                          <div class="progress__bar progress__bar-width-{{ ceil((($active->schools / 40) * 100) / 5) * 5  }}" role="progressbar" aria-valuenow="{{ ceil((($active->schools / 40) * 100) / 5) * 5  }}" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                    </div>
                  </li>
                  <li class="team-stats__item team-stats__item--clean">
                    <div class="team-stats__icon team-stats__icon--circle">
                      <img src="{{asset('images/sportisti-fff.png')}}" alt="" class="team-stats__icon-primary">
                    </div>
                    <div class="team-stats__value">{{ $active->players }}/15</div>
                    <div class="team-stats__label label-stats-profil">Aktivni sportisti</div>
                    <div class="team-stats__label">
                      <div class="progress-stats">
                        <div class="progress">
                          <div class="progress__bar progress__bar-width-{{ ceil((($active->players / 15) * 100) / 5) * 5  }}" role="progressbar" aria-valuenow="{{ ceil((($active->players / 15) * 100) / 5) * 5  }}" aria-valuemin="0" aria-valuemax="100"></div>
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
                    <div class="team-stats__value">{{ $active->objects }}/25</div>
                    <div class="team-stats__label label-stats-profil">Aktivni objekti</div>
                    <div class="team-stats__label">
                      <div class="progress-stats">
                        <div class="progress">
                          <div class="progress__bar progress__bar-width-{{ ceil((($active->objects / 25) * 100) / 5) * 5  }}" role="progressbar" aria-valuenow="{{ ceil((($active->objects / 25) * 100) / 5) * 5  }}" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                    </div>
                  </li>
                  <li class="team-stats__item team-stats__item--clean">
                    <div class="team-stats__icon team-stats__icon--circle">
                      <img src="{{asset('images/oprema-fff.png')}}" alt="" class="team-stats__icon-primary">
                    </div>
                    <div class="team-stats__value">{{ $active->news }}/15</div>
                    <div class="team-stats__label label-stats-profil">Aktivne Vijesti</div>
                    <div class="team-stats__label">
                      <div class="progress-stats">
                        <div class="progress">
                          <div class="progress__bar progress__bar-width-{{ ceil((($active->news / 15) * 100) / 5) * 5  }}" role="progressbar" aria-valuenow="{{ ceil((($active->news / 15) * 100) / 5) * 5  }}" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                    </div>
                  </li>
                  <li class="team-stats__item team-stats__item--clean">
                    <div class="team-stats__icon team-stats__icon--circle">
                      <img src="{{asset('images/kadrovi-fff.png')}}" alt="" class="team-stats__icon-primary">
                    </div>
                    <div class="team-stats__value">{{ $active->staff }}/20</div>
                    <div class="team-stats__label label-stats-profil">Aktivni kadrovi</div>
                    <div class="team-stats__label">
                      <div class="progress-stats">
                        <div class="progress">
                          <div class="progress__bar progress__bar-width-{{ ceil((($active->staff / 20) * 100) / 5) * 5  }}" role="progressbar" aria-valuenow="{{ ceil((($active->staff / 20) * 100) / 5) * 5  }}" aria-valuemin="0" aria-valuemax="100"></div>
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
                <a href="{{ url('/me/news') }}" class="btn btn-default btn-outline btn-xs card-header__button">Pregled svih</a>
              </div>
              <div class="widget__content card__content">
                <ul class="posts posts--simple-list">
                  @if($vijesti)
                    @foreach($vijesti as $vijest)
                      <li class="posts__item posts__item--category-2">
                        <figure class="posts__thumb"><img class="slika-vijesti-01" src="{{asset('images/vijesti/galerija/' . $vijest->slika)}}" alt="">
                        </figure>
                        <div class="posts__inner">
                          <div class="posts__cat">
                            <span class="label posts__cat-label">{{ $vijest->kategorija->naziv }}</span>
                          </div>
                          <h6 class="posts__title"><a href="{{ url('news/' . $vijest->id) }}">{{ $vijest->naslov }}</a></h6>
                          <time datetime="2016-08-23" class="posts__date">{{ \Carbon\Carbon::parse($vijest->created_at)->format("d.m.Y") }}</time>
                        </div>
                      </li>
                    @endforeach
                  @else
                    <p class="text-center">Niste objavili niti jednu vijest do sada.</p>
                  @endif
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Content / End -->

  @endsection