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
                        <h1 class="page-heading__title">Profil korisnika</h1>
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
                    <li class="content-filter__item content-filter__item--active"><a href="{{url('me/profile')}}"
                                                                                     class="content-filter__link"><i
                                    class="fa fa-address-card-o"></i>
                            <small>Pregled</small>
                            Profila</a></li>
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

                        <!-- Osnovne informacije -->
                        <div class="card">
                            <div class="card__header">
                                <h4><i class="fa fa-address-card-o"></i> Osnovne informacije</h4>
                            </div>
                            <div style="min-height: 5em;" class="card__content text-center">

                                <div class="form-group__avatar">
                                    <img src="{{ isset($user->avatar) ? asset('images/avatars/'.$user->avatar) : asset('images/default_avatar.png')}}"
                                         alt="">
                                    <div class="form-group__label">
                                        <h6 class="profil-ime">{{$user->name}}</h6>
                                        <span class="profil-id"><i class="fa fa-tag"></i> {{$user->id}}</span>
                                    </div>
                                </div>
                          <span>Račun kreiran: {{ Carbon\Carbon::parse($user->created_at)->format('d.m.Y') }}</span>
                            </div>
                        </div>
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
                                            <img src="{{asset('images/klubovi-fff.png')}}" alt=""
                                                 class="team-stats__icon-primary">
                                        </div>
                                        <div class="team-stats__value">{{ $active->clubs }}</div>
                                        <div class="team-stats__label label-stats-profil">Aktivni klubovi</div>
                                        <div class="team-stats__label">
                                            <div class="progress-stats">
                                                <div class="progress">
                                                    <div class="progress__bar progress__bar-width-{{ ceil((($active->clubs / 40) * 100) / 5) * 5  }}"
                                                         role="progressbar"
                                                         aria-valuenow="{{ ceil((($active->clubs / 40) * 100) / 5) * 5  }}"
                                                         aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="team-stats__item team-stats__item--clean">
                                        <div class="team-stats__icon team-stats__icon--circle">
                                            <img src="{{asset('images/skole-fff.png')}}" alt=""
                                                 class="team-stats__icon-primary">
                                        </div>
                                        <div class="team-stats__value">{{ $active->schools }}</div>
                                        <div class="team-stats__label label-stats-profil">Aktivne škole</div>
                                        <div class="team-stats__label">
                                            <div class="progress-stats">
                                                <div class="progress">
                                                    <div class="progress__bar progress__bar-width-{{ ceil((($active->schools / 40) * 100) / 5) * 5  }}"
                                                         role="progressbar"
                                                         aria-valuenow="{{ ceil((($active->schools / 40) * 100) / 5) * 5  }}"
                                                         aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="team-stats__item team-stats__item--clean">
                                        <div class="team-stats__icon team-stats__icon--circle">
                                            <img src="{{asset('images/sportisti-fff.png')}}" alt=""
                                                 class="team-stats__icon-primary">
                                        </div>
                                        <div class="team-stats__value">{{ $active->players }}</div>
                                        <div class="team-stats__label label-stats-profil">Aktivni sportisti</div>
                                        <div class="team-stats__label">
                                            <div class="progress-stats">
                                                <div class="progress">
                                                    <div class="progress__bar progress__bar-width-{{ ceil((($active->players / 15) * 100) / 5) * 5  }}"
                                                         role="progressbar"
                                                         aria-valuenow="{{ ceil((($active->players / 15) * 100) / 5) * 5  }}"
                                                         aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="team-stats-box aktivni-profili">
                                    <li class="team-stats__item team-stats__item--clean">
                                        <div class="team-stats__icon team-stats__icon--circle">
                                            <img src="{{asset('images/objekti-fff.png')}}" alt=""
                                                 class="team-stats__icon-primary">
                                        </div>
                                        <div class="team-stats__value">{{ $active->objects }}</div>
                                        <div class="team-stats__label label-stats-profil">Aktivni objekti</div>
                                        <div class="team-stats__label">
                                            <div class="progress-stats">
                                                <div class="progress">
                                                    <div class="progress__bar progress__bar-width-{{ ceil((($active->objects / 25) * 100) / 5) * 5  }}"
                                                         role="progressbar"
                                                         aria-valuenow="{{ ceil((($active->objects / 25) * 100) / 5) * 5  }}"
                                                         aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="team-stats__item team-stats__item--clean">
                                        <div class="team-stats__icon team-stats__icon--circle">
                                            <img src="{{asset('images/oprema-fff.png')}}" alt=""
                                                 class="team-stats__icon-primary">
                                        </div>
                                        <div class="team-stats__value">{{ $active->news }}</div>
                                        <div class="team-stats__label label-stats-profil">Aktivne Vijesti</div>
                                        <div class="team-stats__label">
                                            <div class="progress-stats">
                                                <div class="progress">
                                                    <div class="progress__bar progress__bar-width-{{ ceil((($active->news / 15) * 100) / 5) * 5  }}"
                                                         role="progressbar"
                                                         aria-valuenow="{{ ceil((($active->news / 15) * 100) / 5) * 5  }}"
                                                         aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="team-stats__item team-stats__item--clean">
                                        <div class="team-stats__icon team-stats__icon--circle">
                                            <img src="{{asset('images/kadrovi-fff.png')}}" alt=""
                                                 class="team-stats__icon-primary">
                                        </div>
                                        <div class="team-stats__value">{{ $active->staff }}</div>
                                        <div class="team-stats__label label-stats-profil">Aktivni kadrovi</div>
                                        <div class="team-stats__label">
                                            <div class="progress-stats">
                                                <div class="progress">
                                                    <div class="progress__bar progress__bar-width-{{ ceil((($active->staff / 20) * 100) / 5) * 5  }}"
                                                         role="progressbar"
                                                         aria-valuenow="{{ ceil((($active->staff / 20) * 100) / 5) * 5  }}"
                                                         aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content / End -->

@endsection