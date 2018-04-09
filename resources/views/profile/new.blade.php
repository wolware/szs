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
            <h1 class="page-icon-objavi-title"><img src="{{asset('images/icons/add-new-main.png')}}"></img></h1>
            <h1 class="page-heading__title">Objavi novi profil</h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li class="registracija-podnaslov">Izaberi kategoriju profila</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
	
	<!-- Team Pages Filter -->
        <nav class="content-filter">
          <div class="container">
            <ul class="content-filter__list">
              <li class="content-filter__item content-filter__item--active"><a class="content-filter__link"><i class="fa fa-th-list"></i><small>Izbor</small>Profila</a></li>
              <p class="info-bar-objavi"><i class="fa fa-info-circle"></i> Objavite Vaš profil i doprinesite razvoju sporta u Bosni i Hercegovini. Budite i Vi dio najveće sportske priče. </p>
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
						<img src="{{asset('images/wpps/sportski-klub-wp.png')}}" alt="">
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Sportski Klub</a></h6>
							<div class="posts__excerpt">Dostupno: 5</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="{{url('clubs/new')}}" class="btn btn-warning btn1-objavi-klub"><i class="fa fa-plus-circle"></i> Dodaj novi klub</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-sm-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb">
							<img src="{{asset('images/wpps/skola-sporta-wp.png')}}" alt="">
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Škola sporta</a></h6>
							<div class="posts__excerpt">Dostupno: 0</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="objavi-skolu.php" class="btn btn-warning btn1-objavi-skolu disabled"><i class="fa fa-plus-circle"></i> Dodaj novu školu</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-sm-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb">
							<img src="{{asset('images/wpps/sportisti-wp.png')}}" alt="">
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Sportista</a></h6>
							<div class="posts__excerpt">Dostupno: 14</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="{{url('/athletes/add')}}" class="btn btn-warning btn1-objavi-sportistu"><i class="fa fa-plus-circle"></i> Dodaj novog sportistu</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-sm-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb">
							<img src="{{asset('images/wpps/sportski-objekt-wp.png')}}" alt="">
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Sportski Objekt</a></h6>
							<div class="posts__excerpt">Dostupno: 1</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="objavi-objekat.php" class="btn btn-warning btn1-objavi-objekt"><i class="fa fa-plus-circle"></i> Dodaj novi objekt</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-sm-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb">
							<img src="{{asset('images/wpps/oprema-wp.png')}}" alt="">
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Prodavnica Sportske Opreme</a></h6>
							<div class="posts__excerpt">Dostupno: 0</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="objavi-prodavnicu.php" class="btn btn-warning btn1-objavi-prodavnicu disabled"><i class="fa fa-plus-circle"></i> Dodaj novu prodavnicu</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-sm-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb">
							<img src="{{asset('images/wpps/kadrovi-wp.png')}}" alt="">
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Stručni Kadar</a></h6>
							<div class="posts__excerpt">Dostupno: 2</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="objavi-kadar.php" class="btn btn-warning btn1-objavi-kadar"><i class="fa fa-plus-circle"></i> Dodaj novi kadar</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-sm-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb">
							<img src="{{asset('images/wpps/sportski-event-wp.png')}}" alt="">
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Sportski Event</a></h6>
							<div class="posts__excerpt">Dostupno: Neograničeno</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="objavi-event.php" class="btn btn-warning btn1-objavi-event"><i class="fa fa-plus-circle"></i> Dodaj novi event</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-sm-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb">
							<img src="{{asset('images/wpps/dijaspora-klub-wp.png')}}" alt="">
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="{{url('/news/new')}}">Vijest</a></h6>
							<div class="posts__excerpt">Dostupno: Neograničeno</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="{{url('/news/new')}}" class="btn btn-warning btn1-objavi-dijasporu"><i class="fa fa-plus-circle"></i> Dodaj novu vijest</a>
						</footer>
					  </div>
					</div>
				
		</div>
		
	  </div>
	  </div>


@endsection