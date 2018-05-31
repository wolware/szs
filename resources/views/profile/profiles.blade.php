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
            <h1 class="page-heading__title">Moji profili</h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li class="registracija-podnaslov">Pregled aktivnih profila</li>
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
              <li class="content-filter__item "><a href="{{url('me/profile')}}" class="content-filter__link"><i class="fa fa-address-card-o"></i><small>Pregled</small>Profila</a></li>
              <li class="content-filter__item content-filter__item--active"><a href="{{url('me/profiles')}}" class="content-filter__link"><i class="fa fa-th-list"></i><small>Moji</small>Profili</a></li>
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

        <div class="row">

          <div class="col-md-4">

            <!-- Statistika mojih profila -->
      <div class="card">
              <div class="card__header">
                <h4><i class="fa fa-eye"></i> Aktivnost mojih profila</h4>
              </div>
              <div class="card__content statistika-profila-general">
                <div class="widget-player__details">
            
                  <div class="widget-player__details-row">
                    <div class="widget-player__details__item">
                      <div class="widget-player__details-desc-wrapper">
                        <span class="widget-player__details-holder">
                          <span class="widget-player__details-label">Aktivnih</span>
                          <span class="widget-player__details-desc">profila</span>
                        </span>
                        <span class="widget-player__details-value">{{$aktivnih}}</span>
                      </div>
                    </div>
                    <div class="widget-player__details__item">
                      <div class="widget-player__details-desc-wrapper">
                        <span class="widget-player__details-holder">
                          <span class="widget-player__details-label">Na čekanju</span>
                          <span class="widget-player__details-desc">profila</span>
                        </span>
                        <span class="widget-player__details-value">{{$cekanje}}</span>
                      </div>
                    </div>
                  </div>
          
          <div class="widget-player__details-row">
                    <div class="widget-player__details__item">
                      <div class="widget-player__details-desc-wrapper">
                        <span class="widget-player__details-holder">
                          <span class="widget-player__details-label">Odbijenih</span>
                          <span class="widget-player__details-desc">profila</span>
                        </span>
                        <span class="widget-player__details-value">{{$odbijenih}}</span>
                      </div>
                    </div>
                    <div class="widget-player__details__item">
                      <div class="widget-player__details-desc-wrapper">
                        <span class="widget-player__details-holder">
                          <span class="widget-player__details-label">Uklonjenih</span>
                          <span class="widget-player__details-desc">profila</span>
                        </span>
                        <span class="widget-player__details-value">{{$uklonjenih}}</span>
                      </div>
                    </div>
                  </div>
            
                </div>
              </div>
            </div>
      
       
      
      {{--<div class="card">
              <div class="card__header">
                <h4><i class="fa fa-check-circle-o"></i> Posjećenost mojih profila</h4>
              </div>
              <div class="card__content statistika-profila-general">
                <div class="widget-player__details">
          <div class="widget-player__details-row">
                    <div class="widget-player__details__item">
                      <div class="widget-player__details-desc-wrapper">
                        <span class="widget-player__details-holder">
                          <span class="widget-player__details-label">Danas</span>
                          <span class="widget-player__details-desc">ukupno</span>
                        </span>
                        <span class="widget-player__details-value">1205</span>
                      </div>
                    </div>
                    <div class="widget-player__details__item">
                      <div class="widget-player__details-desc-wrapper">
                        <span class="widget-player__details-holder">
                          <span class="widget-player__details-label">Jučer</span>
                          <span class="widget-player__details-desc">ukupno</span>
                        </span>
                        <span class="widget-player__details-value">1325</span>
                      </div>
                    </div>
                  </div>
          
                  <div class="widget-player__details-row">
                    <div class="widget-player__details__item">
                      <div class="widget-player__details-desc-wrapper">
                        <span class="widget-player__details-holder">
                          <span class="widget-player__details-label">7 dana</span>
                          <span class="widget-player__details-desc">unazad</span>
                        </span>
                        <span class="widget-player__details-value">20210</span>
                      </div>
                    </div>
                    <div class="widget-player__details__item">
                      <div class="widget-player__details-desc-wrapper">
                        <span class="widget-player__details-holder">
                          <span class="widget-player__details-label">30 dana</span>
                          <span class="widget-player__details-desc">unazad</span>
                        </span>
                        <span class="widget-player__details-value">120547</span>
                      </div>
                    </div>
                  </div>
            
                </div>
              </div>
            </div>--}}

            <!-- Statistika mojih profila kraj -->
          </div>

          <div class="col-md-8">

            <!-- Aktivni sportski klubovi -->
        <div class="card card--has-table">
          <div class="card__header">
            <h4><i class="fa fa-bars"></i> Sportski klubovi</h4>
          </div>
          <div class="card__content">
            <div class="table-responsive">
              <table class="table table-hover player-season-avg">
                <thead>
                  <tr>
                    <th class="player-season-avg__season"><i class="fa fa-info-circle"></i> Naziv/Ime kluba</th>
                    <th class="player-season-avg__gmp"><i class="fa fa-tag"></i> ID kluba</th>
                    <th class="player-season-avg__min"><i class="fa fa-calendar-plus-o"></i> Objavljeno</th>
                    <th class="player-season-avg__tg"><i class="fa fa-eye"></i> Pregledi</th>
                    <th class="player-season-avg__gg"><i class="fa fa-question-circle-o"></i> Status</th>
                    <th class="player-season-avg__ts"><i class="fa fa-pencil-square-o"></i></th>
                    <th class="player-season-avg__ts"><i class="fa fa-external-link"></i></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($clubs as $club)
                  <tr>
                    <td class="player-season-avg__season">{{$club->name}}</td>
                    <td class="player-season-avg__gmp">{{$club->id}}</td>
                    <td class="player-season-avg__min">{{ \Carbon\Carbon::parse($club->created_at)->format("d F, Y") }}</td>
                    <td class="player-season-avg__tg"></td>
                    <td class="player-season-avg__gg"><a style="color:#0288D1;">
                      @if($club->status == 'waiting')
                        NA ČEKANJU
                      @elseif($club->status == 'active')
                        AKTIVNO
                      @elseif($club->status == 'refused')
                        ODBIJENO
                      @elseif($club->status == 'deleted')
                        IZBRISANO
                      @endif
                    </a></td>
                    <td class="player-season-avg__ts"><a href="{{url('clubs/'.$club->id.'/edit')}}">Uredi</a></td>
                    <td class="player-season-avg__st"><a href="{{url('clubs/'.$club->id)}}">Pregledaj</a></td>
                  </tr>
                  @endforeach
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- Aktivni sportski klubovi / End -->
        <!-- Aktivne škole sporta -->
        <div class="card card--has-table">
          <div class="card__header">
            <h4><i class="fa fa-bars"></i> Škole sporta</h4>
          </div>
          <div class="card__content">
            <div class="table-responsive">
              <table class="table table-hover player-season-avg">
                <thead>
                  <tr>
                    <th class="player-season-avg__season"><i class="fa fa-info-circle"></i> Naziv/Ime škole</th>
                    <th class="player-season-avg__gmp"><i class="fa fa-tag"></i> ID škole</th>
                    <th class="player-season-avg__min"><i class="fa fa-calendar-plus-o"></i> Objavljeno</th>
                    <th class="player-season-avg__tg"><i class="fa fa-eye"></i> Pregledi</th>
                    <th class="player-season-avg__gg"><i class="fa fa-question-circle-o"></i> Status</th>
                    <th class="player-season-avg__ts"><i class="fa fa-pencil-square-o"></i></th>
                    <th class="player-season-avg__ts"><i class="fa fa-external-link"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="player-season-avg__season">FK Sve Za Sport</td>
                    <td class="player-season-avg__gmp">01012456</td>
                    <td class="player-season-avg__min">20. Novembar, 2017.</td>
                    <td class="player-season-avg__tg">441</td>
                    <td class="player-season-avg__gg"><a style="color:#388E3C;">Aktivno</a></td>
                    <td class="player-season-avg__ts"><a href="#">Uredi</a></td>
                    <td class="player-season-avg__st"><a href="#">Pregledaj</a></td>
                  </tr>
                  <tr>
                    <td class="player-season-avg__season">RK Sve Za Sport</td>
                    <td class="player-season-avg__gmp">01012457</td>
                    <td class="player-season-avg__min">18. Novembar, 2017.</td>
                    <td class="player-season-avg__tg">5545</td>
                    <td class="player-season-avg__gg"><a style="color:#388E3C;">AKTIVNO</a></td>
                    <td class="player-season-avg__ts"><a href="#">Uredi</a></td>
                    <td class="player-season-avg__st"><a href="#">Pregledaj</a></td>
                  </tr>
                  <tr>
                    <td class="player-season-avg__season">KK Sve Za Sport</td>
                    <td class="player-season-avg__gmp">01012488</td>
                    <td class="player-season-avg__min">17. Novembar, 2017.</td>
                    <td class="player-season-avg__tg">0</td>
                    <td class="player-season-avg__gg"><a style="color:#B71C1C;">ODBIJENO</a></td>
                    <td class="player-season-avg__ts"><a href="#">Uredi</a></td>
                    <td class="player-season-avg__st"><a href="#">Pregledaj</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- Aktivni škole sporta / End -->
        <!-- Aktivni sportisti -->
        <div class="card card--has-table">
          <div class="card__header">
            <h4><i class="fa fa-bars"></i> Sportisti</h4>
          </div>
          <div class="card__content">
            <div class="table-responsive">
              <table class="table table-hover player-season-avg">
                <thead>
                  <tr>
                    <th class="player-season-avg__season"><i class="fa fa-info-circle"></i> Ime i prezime</th>
                    <th class="player-season-avg__gmp"><i class="fa fa-tag"></i> ID sportiste</th>
                    <th class="player-season-avg__min"><i class="fa fa-calendar-plus-o"></i> Objavljeno</th>
                    <th class="player-season-avg__tg"><i class="fa fa-eye"></i> Pregledi</th>
                    <th class="player-season-avg__gg"><i class="fa fa-question-circle-o"></i> Status</th>
                    <th class="player-season-avg__ts"><i class="fa fa-pencil-square-o"></i></th>
                    <th class="player-season-avg__ts"><i class="fa fa-external-link"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="player-season-avg__season">Dino Šečić</td>
                    <td class="player-season-avg__gmp">01012456</td>
                    <td class="player-season-avg__min">20. Novembar, 2017.</td>
                    <td class="player-season-avg__tg">21441</td>
                    <td class="player-season-avg__gg"><a style="color:#388E3C;">Aktivno</a></td>
                    <td class="player-season-avg__ts"><a href="#">Uredi</a></td>
                    <td class="player-season-avg__st"><a href="#">Pregledaj</a></td>
                  </tr>
                  <tr>
                    <td class="player-season-avg__season">Edin Musić</td>
                    <td class="player-season-avg__gmp">01012457</td>
                    <td class="player-season-avg__min">18. Novembar, 2017.</td>
                    <td class="player-season-avg__tg">5004</td>
                    <td class="player-season-avg__gg"><a style="color:#388E3C;">AKTIVNO</a></td>
                    <td class="player-season-avg__ts"><a href="#">Uredi</a></td>
                    <td class="player-season-avg__st"><a href="#">Pregledaj</a></td>
                  </tr>
                  <tr>
                    <td class="player-season-avg__season">Irfan Garić</td>
                    <td class="player-season-avg__gmp">01012488</td>
                    <td class="player-season-avg__min">17. Novembar, 2017.</td>
                    <td class="player-season-avg__tg">5442</td>
                    <td class="player-season-avg__gg"><a style="color:#388E3C;">AKTIVNO</a></td>
                    <td class="player-season-avg__ts"><a href="#">Uredi</a></td>
                    <td class="player-season-avg__st"><a href="#">Pregledaj</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- Aktivni sportisti / End -->
        
       <!-- Aktivni sportski objekti -->
        <div class="card card--has-table">
          <div class="card__header">
            <h4><i class="fa fa-bars"></i> Sportski objekti</h4>
          </div>
          <div class="card__content">
            <div class="table-responsive">
              <table class="table table-hover player-season-avg">
                <thead>
                  <tr>
                    <th class="player-season-avg__season"><i class="fa fa-info-circle"></i> Naziv/Ime objekta</th>
                    <th class="player-season-avg__gmp"><i class="fa fa-tag"></i> ID objekta</th>
                    <th class="player-season-avg__min"><i class="fa fa-calendar-plus-o"></i> Objavljeno</th>
                    <th class="player-season-avg__tg"><i class="fa fa-eye"></i> Pregledi</th>
                    <th class="player-season-avg__gg"><i class="fa fa-question-circle-o"></i> Status</th>
                    <th class="player-season-avg__ts"><i class="fa fa-pencil-square-o"></i></th>
                    <th class="player-season-avg__ts"><i class="fa fa-external-link"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="player-season-avg__season">SZS Royal Fitness Club</td>
                    <td class="player-season-avg__gmp">01012456</td>
                    <td class="player-season-avg__min">20. Novembar, 2017.</td>
                    <td class="player-season-avg__tg">17745</td>
                    <td class="player-season-avg__gg"><a style="color:#388E3C;">Aktivno</a></td>
                    <td class="player-season-avg__ts"><a href="#">Uredi</a></td>
                    <td class="player-season-avg__st"><a href="#">Pregledaj</a></td>
                  </tr>
                  <tr>
                    <td class="player-season-avg__season">SKPC Mejdan</td>
                    <td class="player-season-avg__gmp">01012457</td>
                    <td class="player-season-avg__min">18. Novembar, 2017.</td>
                    <td class="player-season-avg__tg">5449</td>
                    <td class="player-season-avg__gg"><a style="color:#388E3C;">AKTIVNO</a></td>
                    <td class="player-season-avg__ts"><a href="#">Uredi</a></td>
                    <td class="player-season-avg__st"><a href="#">Pregledaj</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- Aktivni sportski objekti / End -->
       {{-- <!-- Aktivne prodavnice -->
        <div class="card card--has-table">
          <div class="card__header">
            <h4><i class="fa fa-bars"></i> Vijes</h4>
          </div>
          <div class="card__content">
            <div class="table-responsive">
              <table class="table table-hover player-season-avg">
                <thead>
                  <tr>
                    <th class="player-season-avg__season"><i class="fa fa-info-circle"></i> Naziv/Ime prodavnice</th>
                    <th class="player-season-avg__gmp"><i class="fa fa-tag"></i> ID prodavnice</th>
                    <th class="player-season-avg__min"><i class="fa fa-calendar-plus-o"></i> Objavljeno</th>
                    <th class="player-season-avg__tg"><i class="fa fa-eye"></i> Pregledi</th>
                    <th class="player-season-avg__gg"><i class="fa fa-question-circle-o"></i> Status</th>
                    <th class="player-season-avg__ts"><i class="fa fa-pencil-square-o"></i></th>
                    <th class="player-season-avg__ts"><i class="fa fa-external-link"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="player-season-avg__season">SZS Royal Sport Shop</td>
                    <td class="player-season-avg__gmp">01012456</td>
                    <td class="player-season-avg__min">26. Oktobar, 2017.</td>
                    <td class="player-season-avg__tg">15</td>
                    <td class="player-season-avg__gg"><a style="color:#388E3C;">Aktivno</a></td>
                    <td class="player-season-avg__ts"><a href="#">Uredi</a></td>
                    <td class="player-season-avg__st"><a href="#">Pregledaj</a></td>
                  </tr>
                  <tr>
                    <td class="player-season-avg__season">Super Sport Shop</td>
                    <td class="player-season-avg__gmp">01012457</td>
                    <td class="player-season-avg__min">18. Novembar, 2017.</td>
                    <td class="player-season-avg__tg">8787</td>
                    <td class="player-season-avg__gg"><a style="color:#388E3C;">AKTIVNO</a></td>
                    <td class="player-season-avg__ts"><a href="#">Uredi</a></td>
                    <td class="player-season-avg__st"><a href="#">Pregledaj</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- Aktivne prodavnice / End -->--}}
        <!-- Aktivni kadrovi -->
        <div class="card card--has-table">
          <div class="card__header">
            <h4><i class="fa fa-bars"></i> Stručni kadrovi</h4>
          </div>
          <div class="card__content">
            <div class="table-responsive">
              <table class="table table-hover player-season-avg">
                <thead>
                  <tr>
                    <th class="player-season-avg__season"><i class="fa fa-info-circle"></i> Naziv/Ime kadra</th>
                    <th class="player-season-avg__gmp"><i class="fa fa-tag"></i> ID kadra</th>
                    <th class="player-season-avg__min"><i class="fa fa-calendar-plus-o"></i> Objavljeno</th>
                    <th class="player-season-avg__tg"><i class="fa fa-eye"></i> Pregledi</th>
                    <th class="player-season-avg__gg"><i class="fa fa-question-circle-o"></i> Status</th>
                    <th class="player-season-avg__ts"><i class="fa fa-pencil-square-o"></i></th>
                    <th class="player-season-avg__ts"><i class="fa fa-external-link"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="player-season-avg__season">Tarik jašarević</td>
                    <td class="player-season-avg__gmp">01012456</td>
                    <td class="player-season-avg__min">26. Oktobar, 2017.</td>
                    <td class="player-season-avg__tg">1551</td>
                    <td class="player-season-avg__gg"><a style="color:#388E3C;">Aktivno</a></td>
                    <td class="player-season-avg__ts"><a href="#">Uredi</a></td>
                    <td class="player-season-avg__st"><a href="#">Pregledaj</a></td>
                  </tr>
                  <tr>
                    <td class="player-season-avg__season">Nedim Tufekčić</td>
                    <td class="player-season-avg__gmp">01012457</td>
                    <td class="player-season-avg__min">18. Novembar, 2017.</td>
                    <td class="player-season-avg__tg">9652</td>
                    <td class="player-season-avg__gg"><a style="color:#388E3C;">AKTIVNO</a></td>
                    <td class="player-season-avg__ts"><a href="#">Uredi</a></td>
                    <td class="player-season-avg__st"><a href="#">Pregledaj</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- Aktivni kadrovi / End -->

          </div>
        </div>
      </div>
    </div>

    <!-- Content / End -->
@endsection
