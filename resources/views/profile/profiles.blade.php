@extends('layouts.app')

@section('content')


  <div class="site-wrapper clearfix">
    <div class="site-overlay"></div>


    @include('includes.pushy-panel')
   
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
                    <th class="player-season-avg__gg"><i class="fa fa-question-circle-o"></i> Status</th>
                    <th class="player-season-avg__ts"><i class="fa fa-pencil-square-o"></i></th>
                    <th class="player-season-avg__ts"><i class="fa fa-external-link"></i></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach(Auth::user()->clubs as $club)
                  <tr>
                    <td class="player-season-avg__season">{{$club->name}}</td>
                    <td class="player-season-avg__gmp">{{$club->id}}</td>
                    <td class="player-season-avg__min">{{ \Carbon\Carbon::parse($club->created_at)->format("d F, Y") }}</td>
                    <td class="player-season-avg__gg"><a class="profil-{{ $club->status }}">
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
                    <th class="player-season-avg__gg"><i class="fa fa-question-circle-o"></i> Status</th>
                    <th class="player-season-avg__ts"><i class="fa fa-pencil-square-o"></i></th>
                    <th class="player-season-avg__ts"><i class="fa fa-external-link"></i></th>
                  </tr>
                </thead>
                <tbody>
                @foreach(Auth::user()->schools as $school)
                  <tr>
                    <td class="player-season-avg__season">{{$school->name}}</td>
                    <td class="player-season-avg__gmp">{{$school->id}}</td>
                    <td class="player-season-avg__min">{{ \Carbon\Carbon::parse($school->created_at)->format("d F, Y") }}</td>
                    <td class="player-season-avg__gg"><a class="profil-{{ $school->status }}">
                        @if($school->status == 'waiting')
                          NA ČEKANJU
                        @elseif($school->status == 'active')
                          AKTIVNO
                        @elseif($school->status == 'refused')
                          ODBIJENO
                        @elseif($school->status == 'deleted')
                          IZBRISANO
                        @endif
                      </a></td>
                    <td class="player-season-avg__ts"><a href="{{url('schools/'.$school->id.'/edit')}}">Uredi</a></td>
                    <td class="player-season-avg__st"><a href="{{url('schools/'.$school->id)}}">Pregledaj</a></td>
                  </tr>
                @endforeach
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
                    <th class="player-season-avg__gg"><i class="fa fa-question-circle-o"></i> Status</th>
                    <th class="player-season-avg__ts"><i class="fa fa-pencil-square-o"></i></th>
                    <th class="player-season-avg__ts"><i class="fa fa-external-link"></i></th>
                  </tr>
                </thead>
                <tbody>
                @foreach(Auth::user()->players as $player)
                  <tr>
                    <td class="player-season-avg__season">{{$player->firstname . ' ' . $player->lastname}}</td>
                    <td class="player-season-avg__gmp">{{$player->id}}</td>
                    <td class="player-season-avg__min">{{ \Carbon\Carbon::parse($player->created_at)->format("d F, Y") }}</td>
                    <td class="player-season-avg__gg"><a class="profil-{{ $player->status }}">
                        @if($player->status == 'waiting')
                          NA ČEKANJU
                        @elseif($player->status == 'active')
                          AKTIVNO
                        @elseif($player->status == 'refused')
                          ODBIJENO
                        @elseif($player->status == 'deleted')
                          IZBRISANO
                        @endif
                      </a></td>
                    <td class="player-season-avg__ts"><a href="{{url('athletes/'.$player->id.'/edit')}}">Uredi</a></td>
                    <td class="player-season-avg__st"><a href="{{url('athletes/'.$player->id)}}">Pregledaj</a></td>
                  </tr>
                @endforeach
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
                    <th class="player-season-avg__gg"><i class="fa fa-question-circle-o"></i> Status</th>
                    <th class="player-season-avg__ts"><i class="fa fa-pencil-square-o"></i></th>
                    <th class="player-season-avg__ts"><i class="fa fa-external-link"></i></th>
                  </tr>
                </thead>
                <tbody>
                @foreach(Auth::user()->objects as $object)
                  <tr>
                    <td class="player-season-avg__season">{{$object->name}}</td>
                    <td class="player-season-avg__gmp">{{$object->id}}</td>
                    <td class="player-season-avg__min">{{ \Carbon\Carbon::parse($object->created_at)->format("d F, Y") }}</td>
                    <td class="player-season-avg__gg"><a class="profil-{{ $object->status }}">
                        @if($object->status == 'waiting')
                          NA ČEKANJU
                        @elseif($object->status == 'active')
                          AKTIVNO
                        @elseif($object->status == 'refused')
                          ODBIJENO
                        @elseif($object->status == 'deleted')
                          IZBRISANO
                        @endif
                      </a></td>
                    <td class="player-season-avg__ts"><a href="{{url('objects/'.$object->id.'/edit')}}">Uredi</a></td>
                    <td class="player-season-avg__st"><a href="{{url('objects/'.$object->id)}}">Pregledaj</a></td>
                  </tr>
                @endforeach
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
                    <th class="player-season-avg__gg"><i class="fa fa-question-circle-o"></i> Status</th>
                    <th class="player-season-avg__ts"><i class="fa fa-pencil-square-o"></i></th>
                    <th class="player-season-avg__ts"><i class="fa fa-external-link"></i></th>
                  </tr>
                </thead>
                <tbody>
                @foreach(Auth::user()->staff as $staff)
                  <tr>
                    <td class="player-season-avg__season">{{$staff->firstname . ' ' . $staff->lastname }}</td>
                    <td class="player-season-avg__gmp">{{$staff->id}}</td>
                    <td class="player-season-avg__min">{{ \Carbon\Carbon::parse($staff->created_at)->format("d F, Y") }}</td>
                    <td class="player-season-avg__gg"><a class="profil-{{ $staff->status }}">
                        @if($staff->status == 'waiting')
                          NA ČEKANJU
                        @elseif($staff->status == 'active')
                          AKTIVNO
                        @elseif($staff->status == 'refused')
                          ODBIJENO
                        @elseif($staff->status == 'deleted')
                          IZBRISANO
                        @endif
                      </a></td>
                    <td class="player-season-avg__ts"><a href="{{url('staff/'.$staff->id.'/edit')}}">Uredi</a></td>
                    <td class="player-season-avg__st"><a href="{{url('staff/'.$staff->id)}}">Pregledaj</a></td>
                  </tr>
                @endforeach
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
