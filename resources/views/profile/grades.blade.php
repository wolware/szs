@extends('layouts.app')

@section('content')


  <div class="site-wrapper clearfix">
    <div class="site-overlay"></div>


<!-- Header
    ================================================== -->

    <!-- Header / End -->
    
    <!-- Pushy Panel - Dark -->
    <aside class="pushy-panel pushy-panel--dark">
      <div class="pushy-panel__inner">
        <header class="pushy-panel__header">
          <div class="pushy-panel__logo">
            <a href="index.php"><img src="{{asset('images/soccer/logo.png')}}" srcset="images/soccer/logo@2x.png 2x" alt="Alchemists"></a>
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
            <h1 class="page-heading__title"><i class="fa fa-star-o fa-2x"></i></h1>
            <h1 class="page-heading__title">Moje ocjene</h1>
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
              <li class="content-filter__item "><a href="{{url('me/news')}}" class="content-filter__link"><i class="fa fa-plus-square-o"></i><small>Moje</small>Vijesti</a></li>
{{--
              <li class="content-filter__item content-filter__item--active"><a href="{{url('me/grades')}}" class="content-filter__link"><i class="fa fa-star-o"></i><small>Moje</small>Ocjene</a></li>
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
                <h4><i class="fa fa-star"></i> Status ocjena</h4>
              </div>
              <div class="card__content text-center">
                <h2 class="profil-counter">314</h2>
                <p class="counter-info">Objavljenih ocjena</p>
              </div>
            </div>

            <!-- SZS Ocjene status kraj -->
			
			<!-- SZS Statistika ocjena -->
			<div class="card">
              <div class="card__header">
                <h4><i class="fa fa-pie-chart"></i> Statistika mojih ocjena</h4>
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
            </div>
			<!-- SZS Statistika ocjena kraj -->
			
			<!-- SZS Kredit -->

            <div class="card">
              <div class="card__header">
                <h4><i class="fa fa-database"></i> Zarađeni krediti</h4>
              </div>
              <div class="card__content text-center">
                <h2 class="profil-counter">630</h2>
                <p class="counter-info">Zarađenih kredita od ocjena</p>
              </div>
            </div>

            <!-- SZS Kredit kraj -->

			</div>
			
		<div class="col-md-8">
		<div class="card">
          <div class="card__header">
            <h4><i class="fa fa-history"></i> Evidencija mojih ocjena</h4>
          </div>
          <div class="card__content kartica-ev-ocjene">

            <div class="table-responsive">
              <table class="table shop-table">
                <thead>
                  <tr>
                    <th class="product__photo">Slika</th>
                    <th class="product__info">Naziv/Ime objekta</th>
                    <th class="product__price">Ocjena</th>
                    <th class="product__availability">Uredi</th>
                    <th class="product__remove">Ukloni</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="product__photo">
                      <figure class="product__thumb" width="10%">
						<a href="#"><img class="img-ocjene" src="{{asset('images/gym-wallpaper-1280x800.jpg')}}" alt=""></a>
                      </figure>
                    </td>
                    <td class="product__info" width="60%">
                      <span class="product__cat">Teretana</span>
                      <h5 class="product__name"><a href="#">SZS Royal Fitness Center</a></h5>
                    </td>
                    <td class="product__price" width="10%">
                      9,8
                    </td>
                    <td class="product__availability" width="10%">
                      <a href="#">UREDI</a>
                    </td>
                    <td class="product__remove" width="10%">
                      <a href="#" class="fa fa-times product__remove-icon"></a>
                    </td>
                  </tr>
				  <tr>
                    <td class="product__photo">
                      <figure class="product__thumb" width="10%">
						<a href="#"><img class="img-ocjene" src="{{asset('images/gym-wallpaper-1280x800.jpg')}}" alt=""></a>
                      </figure>
                    </td>
                    <td class="product__info" width="60%">
                      <span class="product__cat">Teretana</span>
                      <h5 class="product__name"><a href="#">SZS Royal Fitness Center</a></h5>
                    </td>
                    <td class="product__price" width="10%">
                      9,8
                    </td>
                    <td class="product__availability" width="10%">
                      <a href="#">UREDI</a>
                    </td>
                    <td class="product__remove" width="10%">
                      <a href="#" class="fa fa-times product__remove-icon"></a>
                    </td>
                  </tr>
				  <tr>
                    <td class="product__photo">
                      <figure class="product__thumb" width="10%">
						<a href="#"><img class="img-ocjene" src="{{asset('images/gym-wallpaper-1280x800.jpg')}}" alt=""></a>
                      </figure>
                    </td>
                    <td class="product__info" width="60%">
                      <span class="product__cat">Teretana</span>
                      <h5 class="product__name"><a href="#">SZS Royal Fitness Center</a></h5>
                    </td>
                    <td class="product__price" width="10%">
                      9,8
                    </td>
                    <td class="product__availability" width="10%">
                      <a href="#">UREDI</a>
                    </td>
                    <td class="product__remove" width="10%">
                      <a href="#" class="fa fa-times product__remove-icon"></a>
                    </td>
                  </tr>
				  <tr>
                    <td class="product__photo">
                      <figure class="product__thumb" width="10%">
						<a href="#"><img class="img-ocjene" src="{{asset('images/promo240429713.jpg')}}" alt=""></a>
                      </figure>
                    </td>
                    <td class="product__info" width="60%">
                      <span class="product__cat">Teretana</span>
                      <h5 class="product__name"><a href="#">SZS Royal Fitness Center</a></h5>
                    </td>
                    <td class="product__price" width="10%">
                      9,8
                    </td>
                    <td class="product__availability" width="10%">
                      <a href="#">UREDI</a>
                    </td>
                    <td class="product__remove" width="10%">
                      <a href="#" class="fa fa-times product__remove-icon"></a>
                    </td>
                  </tr>
				  <tr>
                    <td class="product__photo">
                      <figure class="product__thumb" width="10%">
						<a href="#"><img class="img-ocjene" src="{{asset('images/promo240429713.jpg')}}" alt=""></a>
                      </figure>
                    </td>
                    <td class="product__info" width="60%">
                      <span class="product__cat">Teretana</span>
                      <h5 class="product__name"><a href="#">SZS Royal Fitness Center</a></h5>
                    </td>
                    <td class="product__price" width="10%">
                      9,8
                    </td>
                    <td class="product__availability" width="10%">
                      <a href="#">UREDI</a>
                    </td>
                    <td class="product__remove" width="10%">
                      <a href="#" class="fa fa-times product__remove-icon"></a>
                    </td>
                  </tr>
				  <tr>
                    <td class="product__photo">
                      <figure class="product__thumb" width="10%">
						<a href="#"><img class="img-ocjene" src="{{asset('images/promo240429713.jpg')}}" alt=""></a>
                      </figure>
                    </td>
                    <td class="product__info" width="60%">
                      <span class="product__cat">Teretana</span>
                      <h5 class="product__name"><a href="#">SZS Royal Fitness Center</a></h5>
                    </td>
                    <td class="product__price" width="10%">
                      9,8
                    </td>
                    <td class="product__availability" width="10%">
                      <a href="#">UREDI</a>
                    </td>
                    <td class="product__remove" width="10%">
                      <a href="#" class="fa fa-times product__remove-icon"></a>
                    </td>
                  </tr>
				  <tr>
                    <td class="product__photo">
                      <figure class="product__thumb" width="10%">
						<a href="#"><img class="img-ocjene" src="{{asset('images/promo240429713.jpg')}}" alt=""></a>
                      </figure>
                    </td>
                    <td class="product__info" width="60%">
                      <span class="product__cat">Teretana</span>
                      <h5 class="product__name"><a href="#">SZS Royal Fitness Center</a></h5>
                    </td>
                    <td class="product__price" width="10%">
                      9,8
                    </td>
                    <td class="product__availability" width="10%">
                      <a href="#">UREDI</a>
                    </td>
                    <td class="product__remove" width="10%">
                      <a href="#" class="fa fa-times product__remove-icon"></a>
                    </td>
                  </tr>
				  <tr>
                    <td class="product__photo">
                      <figure class="product__thumb" width="10%">
						<a href="#"><img class="img-ocjene" src="{{asset('images/promo240429713.jpg')}}" alt=""></a>
                      </figure>
                    </td>
                    <td class="product__info" width="60%">
                      <span class="product__cat">Teretana</span>
                      <h5 class="product__name"><a href="#">SZS Royal Fitness Center</a></h5>
                    </td>
                    <td class="product__price" width="10%">
                      9,8
                    </td>
                    <td class="product__availability" width="10%">
                      <a href="#">UREDI</a>
                    </td>
                    <td class="product__remove" width="10%">
                      <a href="#" class="fa fa-times product__remove-icon"></a>
                    </td>
                  </tr>
				  <tr>
                    <td class="product__photo">
                      <figure class="product__thumb" width="10%">
						<a href="#"><img class="img-ocjene" src="{{asset('images/promo240429713.jpg')}}" alt=""></a>
                      </figure>
                    </td>
                    <td class="product__info" width="60%">
                      <span class="product__cat">Teretana</span>
                      <h5 class="product__name"><a href="#">SZS Royal Fitness Center</a></h5>
                    </td>
                    <td class="product__price" width="10%">
                      9,8
                    </td>
                    <td class="product__availability" width="10%">
                      <a href="#">UREDI</a>
                    </td>
                    <td class="product__remove" width="10%">
                      <a href="#" class="fa fa-times product__remove-icon"></a>
                    </td>
                  </tr>
				  <tr>
                    <td class="product__photo">
                      <figure class="product__thumb" width="10%">
						<a href="#"><img class="img-ocjene" src="{{asset('images/promo240429713.jpg')}}" alt=""></a>
                      </figure>
                    </td>
                    <td class="product__info" width="60%">
                      <span class="product__cat">Teretana</span>
                      <h5 class="product__name"><a href="#">SZS Royal Fitness Center</a></h5>
                    </td>
                    <td class="product__price" width="10%">
                      9,8
                    </td>
                    <td class="product__availability" width="10%">
                      <a href="#">UREDI</a>
                    </td>
                    <td class="product__remove" width="10%">
                      <a href="#" class="fa fa-times product__remove-icon"></a>
                    </td>
                  </tr>
                </tbody>
              </table>
			  
			<!-- Navigacija -->
            <nav class="post-pagination text-center">
              <ul class="pagination pagination--condensed pagination--lg">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><span>...</span></li>
                <li><a href="#">16</a></li>
              </ul>
            </nav>
            <!-- Navigacija / End -->

            </div>
		   </div>
		  </div>
		</div>
	   </div>
	  </div>
	</div>


@endsection