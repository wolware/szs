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
            <h1 class="page-heading__title"><i class="fa fa-trophy fa-2x"></i></h1>
            <h1 class="page-heading__title">Moje medalje</h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li class="registracija-podnaslov">Sve Za Sport</li>
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
              <li class="content-filter__item "><a href="{{url('me/profiles')}}" class="content-filter__link"><i class="fa fa-th-list"></i><small>Moji</small>Profili</a></li>
              <li class="content-filter__item content-filter__item--active"><a href="{{url('me/medals')}}" class="content-filter__link"><i class="fa fa-trophy"></i><small>Moje</small>Medalje</a></li>
              <li class="content-filter__item "><a href="{{url('me/news')}}" class="content-filter__link"><i class="fa fa-plus-square-o"></i><small>Moje</small>Vijesti</a></li>
{{--
              <li class="content-filter__item"><a href="{{url('me/grades')}}" class="content-filter__link"><i class="fa fa-star-o"></i><small>Moje</small>Ocjene</a></li>
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
			<!-- SZS Ocjene status -->

            <div class="card">
              <div class="card__header">
                <h4><i class="fa fa-trophy"></i> Status medalja</h4>
              </div>
              <div class="card__content text-center">
                <h2 class="profil-counter">9</h2>
                <p class="counter-info">Osvojenih medalja</p>
              </div>
            </div>

            <!-- SZS Ocjene status kraj -->
			</div>
			
		<div class="col-md-8">
			<aside class="widget widget--sidebar card card--has-table widget-team-stats">
                  <div class="widget__title card__header">
                    <h4><i class="fa fa-th-large"></i> Arhiva osvojenih medalja</h4>
                  </div>
                  <div class="widget__content card__content">
                    <ul class="team-stats-box grid-line-medalje">
                      <li class="team-stats__item team-stats__item--clean col-md-3">
                        <div class="team-stats__icon team-stats__icon--circle">
                          <img src="{{asset('images/certificate.svg')}}" alt="" class="team-stats__icon-primary">
                        </div>
                        <div class="team-stats__value">1/10</div>
                        <div class="team-stats__label">Sportski guru <a href="#"><i class="fa fa-info-circle"></i></a></div>
                      </li>
					  <li class="team-stats__item team-stats__item--clean col-md-3">
                        <div class="team-stats__icon team-stats__icon--circle">
                          <img src="{{asset('images/certificate.svg')}}" alt="" class="team-stats__icon-primary">
                        </div>
                        <div class="team-stats__value">1/10</div>
                        <div class="team-stats__label">Sportski guru <a href="#"><i class="fa fa-info-circle"></i></a></div>
                      </li>
					  <li class="team-stats__item team-stats__item--clean col-md-3">
                        <div class="team-stats__icon team-stats__icon--circle">
                          <img src="{{asset('images/certificate.svg')}}" alt="" class="team-stats__icon-primary">
                        </div>
                        <div class="team-stats__value">1/10</div>
                        <div class="team-stats__label">Sportski guru <a href="#"><i class="fa fa-info-circle"></i></a></div>
                      </li>
					  <li class="team-stats__item team-stats__item--clean col-md-3">
                        <div class="team-stats__icon team-stats__icon--circle">
                          <img src="{{asset('images/certificate.svg')}}" alt="" class="team-stats__icon-primary">
                        </div>
                        <div class="team-stats__value">1/10</div>
                        <div class="team-stats__label">Sportski guru <a href="#"><i class="fa fa-info-circle"></i></a></div>
                      </li>
                    </ul>
					<ul class="team-stats-box grid-line-medalje">
                      <li class="team-stats__item team-stats__item--clean col-md-3">
                        <div class="team-stats__icon team-stats__icon--circle">
                          <img src="{{asset('images/certificate.svg')}}" alt="" class="team-stats__icon-primary">
                        </div>
                        <div class="team-stats__value">1/10</div>
                        <div class="team-stats__label">Sportski guru <a href="#"><i class="fa fa-info-circle"></i></a></div>
                      </li>
					  <li class="team-stats__item team-stats__item--clean col-md-3">
                        <div class="team-stats__icon team-stats__icon--circle">
                          <img src="{{asset('images/certificate.svg')}}" alt="" class="team-stats__icon-primary">
                        </div>
                        <div class="team-stats__value">1/10</div>
                        <div class="team-stats__label">Sportski guru <a href="#"><i class="fa fa-info-circle"></i></a></div>
                      </li>
					  <li class="team-stats__item team-stats__item--clean col-md-3">
                        <div class="team-stats__icon team-stats__icon--circle">
                          <img src="{{asset('images/certificate.svg')}}" alt="" class="team-stats__icon-primary">
                        </div>
                        <div class="team-stats__value">1/10</div>
                        <div class="team-stats__label">Sportski guru <a href="#"><i class="fa fa-info-circle"></i></a></div>
                      </li>
					  <li class="team-stats__item team-stats__item--clean col-md-3">
                        <div class="team-stats__icon team-stats__icon--circle">
                          <img src="{{asset('images/certificate.svg')}}" alt="" class="team-stats__icon-primary">
                        </div>
                        <div class="team-stats__value">1/10</div>
                        <div class="team-stats__label">Sportski guru <a href="#"><i class="fa fa-info-circle"></i></a></div>
                      </li>
                    </ul>
                  </div>
                </aside>
		</div>
	   </div>
	  </div>
	</div>


@endsection