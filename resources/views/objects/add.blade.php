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
            <a href="index.php"><img src="{{url('assets/images/soccer/logo.png')}}" srcset="assets/images/soccer/logo@2x.png 2x" alt="Alchemists"></a>
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
            <h1 class="page-icon-objavi-title"><img src="{{url('assets/images/sportovi-fff.png')}}"></img></h1>
            <h1 class="page-heading__title">Svi objekti</h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li class="registracija-podnaslov">Dostupni u Bosni i Hercegovini</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
	
	<!-- Team Pages Filter -->
        <nav class="content-filter">
          <div class="container">
            <ul class="content-filter__list">
              <li class="content-filter__item content-filter__item--active"><a class="content-filter__link"><i class="fa fa-bars"></i><small>Svi</small>Objekti</a></li>
            </ul>
          </div>
        </nav>
        <!-- Team Pages Filter / End -->

    <!-- Content
    ================================================== -->
      <div class="site-content">
      <div class="container">

        <div class="row igraci-grid">
					
					<div class="post-grid__item col-sm-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb">
							<img src="{{url('assets/images/wpps/oprema-wp.png')}}" alt="">
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Balon</a></h6>
							<div class="posts__excerpt"></div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="{{url('/objects/balon/new')}}" class="btn btn-warning btn1-objavi-prodavnicu">Pregled karte objekta <i class="fa fa-chevron-right"></i></a>
						</footer>
					  </div>
					</div>
					
					<!--<div class="post-grid__item col-sm-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb">
							<img src="{{url('assets/images/wpps/oprema-wp.png')}}" alt="">
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Aikido</a></h6>
							<div class="posts__excerpt"></div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="{{url('/objects/aikido/new')}}" class="btn btn-warning btn1-objavi-prodavnicu">Pregled karte objekta <i class="fa fa-chevron-right"></i></a>
						</footer>
					  </div>
					</div>-->
					
					<div class="post-grid__item col-sm-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb">
							<img src="{{url('assets/images/wpps/oprema-wp.png')}}" alt="">
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Bazen</a></h6>
							<div class="posts__excerpt"></div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="{{url('/objects/bazen/new')}}" class="btn btn-warning btn1-objavi-prodavnicu">Pregled karte objekta <i class="fa fa-chevron-right"></i></a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-sm-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb">
							<img src="{{url('assets/images/wpps/oprema-wp.png')}}" alt="">
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Dvorana</a></h6>
							<div class="posts__excerpt"></div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="{{url('/objects/dvorana/new')}}" class="btn btn-warning btn1-objavi-prodavnicu">Pregled karte objekta <i class="fa fa-chevron-right"></i></a>
						</footer>
					  </div>
					</div>

					<div class="post-grid__item col-sm-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb">
							<img src="{{url('assets/images/wpps/oprema-wp.png')}}" alt="">
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Kuglana</a></h6>
							<div class="posts__excerpt"></div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="{{url('/objects/kuglana/new')}}" class="btn btn-warning btn1-objavi-prodavnicu">Pregled karte objekta <i class="fa fa-chevron-right"></i></a>
						</footer>
					  </div>
					</div>

					<div class="post-grid__item col-sm-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb">
							<img src="{{url('assets/images/wpps/oprema-wp.png')}}" alt="">
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Stadion</a></h6>
							<div class="posts__excerpt"></div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="{{url('/objects/stadion/new')}}" class="btn btn-warning btn1-objavi-prodavnicu">Pregled karte objekta <i class="fa fa-chevron-right"></i></a>
						</footer>
					  </div>
					</div>

					<div class="post-grid__item col-sm-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb">
							<img src="{{url('assets/images/wpps/oprema-wp.png')}}" alt="">
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Teretana</a></h6>
							<div class="posts__excerpt"></div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="{{url('/objects/teretana/new')}}" class="btn btn-warning btn1-objavi-prodavnicu">Pregled karte objekta <i class="fa fa-chevron-right"></i></a>
						</footer>
					  </div>
					</div>

				
					
					
				
		</div>
		
	  </div>
	  </div>


@endsection