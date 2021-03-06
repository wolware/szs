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
            <h1 class="page-heading__title"><i class="fa fa-plus-square-o fa-2x"></i></h1>
            <h1 class="page-heading__title">Moje vijesti</h1>
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
              <li class="content-filter__item content-filter__item--active"><a href="{{url('me/news')}}" class="content-filter__link"><i class="fa fa-plus-square-o"></i><small>Moje</small>Vijesti</a></li>
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
			<!-- SZS Vijesti status -->

            <div class="card">
              <div class="card__header">
                <h4><i class="fa fa-plus-square-o"></i> Status vijesti</h4>
              </div>
              <div class="card__content text-center">
                <h2 class="profil-counter">{{ $vijesti->count() }}</h2>
                <p class="counter-info">Objavljenih vijesti</p>
              </div>
            </div>

            <!-- SZS Vijesti status kraj -->
			
			<!-- SZS statistika vijesti -->
			{{--<div class="card">
              <div class="card__header">
                <h4><i class="fa fa-pie-chart"></i> Statistika mojih vijesti</h4>
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
                        <span class="widget-player__details-value">2</span>
                      </div>
                    </div>
                    <div class="widget-player__details__item">
                      <div class="widget-player__details-desc-wrapper">
                        <span class="widget-player__details-holder">
                          <span class="widget-player__details-label">Jučer</span>
                          <span class="widget-player__details-desc">ukupno</span>
                        </span>
                        <span class="widget-player__details-value">1</span>
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
                        <span class="widget-player__details-value">5</span>
                      </div>
                    </div>
                    <div class="widget-player__details__item">
                      <div class="widget-player__details-desc-wrapper">
                        <span class="widget-player__details-holder">
                          <span class="widget-player__details-label">30 dana</span>
                          <span class="widget-player__details-desc">unazad</span>
                        </span>
                        <span class="widget-player__details-value">10</span>
                      </div>
                    </div>
                  </div>
            
                </div>
              </div>
            </div>--}}
			<!-- SZS Statistika vijesti kraj -->
			
			<!-- SZS Kredit -->

         {{--   <div class="card">
              <div class="card__header">
                <h4><i class="fa fa-database"></i> Zarađeni krediti</h4>
              </div>
              <div class="card__content text-center">
                <h2 class="profil-counter">84</h2>
                <p class="counter-info">Zarađenih kredita od vijesti</p>
              </div>
            </div>--}}

            <!-- SZS Kredit kraj -->

			</div>
			
		<div class="col-md-8">
		<div class="card">
          <div class="card__header">
            <h4><i class="fa fa-history"></i> Evidencija mojih vijesti</h4>
          </div>
			<!-- Lista vijesti -->
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
                          <!-- <a href="#" class="btn btn-default btn-outline btn-uredi-vijest card-header__button">Uredi</a> -->
                        </div>
                      </li>
                    @endforeach
                  @else
                    <p class="text-center">Trenutno nemate objavljenih vijesti.</p>
                  @endif
                </ul>



                <div class="text-center">
                  {{ $vijesti->links() }}
                </div>

              </div>
            <!-- Lista vijesti / End -->
			
		  </div>
		</div>
	   </div>
	  </div>
	</div>


@endsection