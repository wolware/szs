@extends ('layouts.app')

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
            <h1 class="page-icon-objavi-title"><img src="{{asset('images/klubovi-fff.png')}}"></img></h1>
            <h1 class="page-heading__title">Sportski klubovi</h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li class="registracija-podnaslov">U Bosni i Hercegovini</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
	
		 <!-- Post Filter -->
			<div class="post-filter">
			  <div class="container">
				<form role="form" method="GET" class="post-filter__form clearfix forma-filteri">
				  <div class="post-filter__select">
					<label class="post-filter__label">Kategorija kluba</label>
					<select class="cs-select cs-skin-border" name="kategorija">
					  <option value="" disabled selected>Izaberite kategoriju kluba</option>
					  <option value="Muski klubovi">Muški klubovi</option>
					  <option value="Zenski klub">Ženski klubovi</option>
					  <option value="Mjesovito">Mješovito</option>
					</select>
				  </div>
				  <div class="post-filter__select">
					<label class="post-filter__label">Tip sporta</label>
					<select class="cs-select cs-skin-border" name="tip">
					  <option value="Sportski klub" selected>Sportski klubovi</option>
					</select>
				  </div>
				 <div class="post-filter__select">
					<label class="post-filter__label">Sport</label>
					<select class="cs-select cs-skin-border" name="sport">
						<option value="" selected>Izaberite sport</option>
						<option value="Aikido">Aikido</option>
						<option value="Atletika">Atletika</option>
						<option value="Auto-Moto">Auto-Moto</option>
						<option value="Badminton">Badminton</option>
						<option value="Biciklizam">Biciklizam</option>
						<option value="Bob">Bob</option>
						<option value="Bocanje">Boćanje</option>
						<option value="Bodybuilding and Fitness">Bodybuilding & Fitness</option>
						<option value="Boks">Boks</option>
						<option value="Curling">Curling</option>
						<option value="Dizanje tegova">Dizanje tegova</option>
						<option value="Futsal">Futsal</option>
						<option value="Gimnastika">Gimnastika</option>
						<option value="Golf">Golf</option>
						<option value="Hokej">Hokej</option>
						<option value="Hrvanje">Hrvanje</option>
						<option value="Jedrenje">Jedrenje</option>
						<option value="Ju Jitsu">Ju Jitsu</option>
						<option value="Judo">Judo</option>
						<option value="Kajak Kanu i Rafting">Kajak Kanu i Rafting</option>
						<option value="Karate">Karate</option>
						<option value="Kick Box">Kick Box</option>
						<option value="Klizanje">Klizanje</option>
						<option value="Konjicki sportovi">Konjički sportovi</option>
						<option value="Kosarka">Košarka</option>
						<option value="Kung Fu">Kung Fu</option>
						<option value="Kuglanje">Kuglanje</option>
						<option value="Nogomet">Nogomet</option>
						<option value="Macevanje">Mačevanje</option>
						<option value="Odbojka">Odbojka</option>
						<option value="Planinarstvo">Planinarstvo</option>
						<option value="Plivanje">Plivanje</option>
						<option value="Ragbi">Ragbi</option>
						<option value="Ronjenje">Ronjenje</option>
						<option value="Rukomet">Rukomet</option>
						<option value="Skijanje">Skijanje</option>
						<option value="Sportski ribolov">Sportski ribolov</option>
						<option value="Stoni tenis">Stoni tenis</option>
						<option value="Strelicarstvo">Streličarstvo</option>
						<option value="Streljastvo">Streljaštvo</option>
						<option value="Sah">Šah</option>
						<option value="Teakwondo">Taekwondo</option>
						<option value="Tenis">Tenis</option>
						<option value="Triatlon">Triatlon</option>
						<option value="Vaterpolo">Vaterpolo</option>
						<option value="Vazduhoplovstvo">Vazduhoplovstvo</option>
						<option value="Veslanje">Veslanje</option>
					</select>
				  </div>
				  <div class="post-filter__select" hidden>
					<label class="post-filter__label">Sport</label>
					<select class="cs-select cs-skin-border">
						<option value="" disabled selected>Izaberite sport</option>
						<option value="">Alpsko skijanje</option>
						<option value="">Atletika</option>
						<option value="">Global</option>
						<option value="">Košarka u kolicima</option>
						<option value="">Nordijsko skijanje</option>
						<option value="">Plivanje</option>
						<option value="">Sjedeća odbojka</option>
						<option value="">Stoni tenis</option>
						<option value="">Streljaštvo</option>
						<option value="">Šah</option>
					</select>
				  </div>
				  <div class="post-filter__select">
					<label class="post-filter__label">Entitet</label>
					<select class="cs-select cs-skin-border" name="entitet">
					  <option value="Federacija BiH" selected>Federacija BiH</option>
    				  <option value="Republika Srpska">Republika Srpska</option>
					  <option value="Distrikt Brcko">Distrikt Brčko</option>
					</select>
				  </div>
				  <div class="post-filter__select">
					<label class="post-filter__label">Kanton</label>
					<select class="cs-select cs-skin-border" name="kanton">
						<option value="Unsko-sanski Kanton" disabled>Unsko-sanski Kanton</option>
    					<option value="Posavski Kanton" disabled>Posavski Kanton</option>
						<option value="Tuzlanski Kanton" disabled>Tuzlanski Kanton</option>
    					<option value="Zeničko-dobojski Kanton" disabled>Zeničko-dobojski Kanton</option>
						<option value="Bosansko-podrinjski kanton" disabled>Bosansko-podrinjski Kanton</option>
    					<option value="Srednjobosanski Kanton" disabled>Srednjobosanski Kanton</option>
						<option value="Hercegovačko-neretvanski Kanton" disabled>Hercegovačko-neretvanski Kanton</option>
    					<option value="Zapadnohercegovački Kanton" disabled>Zapadnohercegovački Kanton</option>
						<option value="Kanton Sarajevo" selected>Kanton Sarajevo</option>
    					<option value="Kanton 10" disabled>Kanton 10</option>
					</select>
				  </div>
				  <div class="post-filter__select" hidden>
					<label class="post-filter__label">Regija</label>
					<select class="cs-select cs-skin-border">
						<option value="" disabled selected>Izaberite regiju</option>
						<option value="blk" disabled>Banjalučka</option>
    					<option value="dbj" disabled>Dobojsko-bijeljinska</option>
						<option value="szv">Sarajevsko-zvornička</option>
    					<option value="tbf"disabled>Trebinjsko-fočanska</option>
					</select>
				  </div>
				  <div class="post-filter__select">
					<label class="post-filter__label">Općine Kantona Sarajevo</label>
					<select class="cs-select cs-skin-border" name="opcina">
					  <option value="" disabled selected>Filter nije izabran</option>
					  <option value="Hadzici">Hadžići</option>
						<option value="Ilidza">Ilidža</option>
						<option value="Ilijas">Ilijaš</option>
						<option value="Centar">Centar</option>
						<option value="Novi-grad">Novi Grad</option>
						<option value="Novo-sarajevo">Novo Sarajevo</option>
						<option value="Stari-grad">Stari Grad</option>
						<option value="Trnovo">Trnovo</option>
					</select>
				  </div>
				  <div class="post-filter__select" hidden>
					<label class="post-filter__label">Općine Zvorničko-Sarajevske regije</label>
					<select class="cs-select cs-skin-border">
					    <option value="" disabled selected>Izaberite općinu</option>
						<option value="bratunac">Bratunac</option>
    					<option value="hanpijesak">Han Pijesak</option>
						<option value="ilijas2">Ilijaš</option>
    					<option value="istocni-stari-grad">Istočni Stari Grad</option>
						<option value="kasindo">Kasindo</option>
    					<option value="kladanj">Kladanj</option>
						<option value="lukavica">Lukavica</option>
    					<option value="milici">Milići</option>
						<option value="olovo">Olovo</option>
						<option value="osmaci">Osmaci</option>
    					<option value="pale">Pale</option>
						<option value="rogatica">Rogatica</option>
    					<option value="rudo">Rudo</option>
						<option value="sa-novi-grad">Sarajevo Novi Grad</option>
    					<option value="sokolac">Sokolac</option>
						<option value="srebrenica">Srebrenica</option>
    					<option value="trnovo2">Trnovo</option>
						<option value="ustipraca">Ustiprača</option>
						<option value="visegrad">Višegrad</option>
						<option value="vlasenica">Vlasenica</option>
						<option value="zvornik">Zvornik</option>
						<option value="sekovici">Šekovići</option>
						<option value="zepa">Žepa</option>
					</select>
				  </div>
				  <div class="post-filter__select">
					<label class="post-filter__label">Sortiraj po</label>
					<select class="cs-select cs-skin-border">
					    <option value="" selected>Abecedi silazno</option>
						<option value="">Abecedi uzlazno</option>
    					<option value="">Gradovima i mjestima</option>
						<option value="">Kantonima/Regijama</option>
    					<option value="">Sportu</option>
					</select>
				  </div>
				  <div class="post-filter__select">
				  </div>
				  <div class="post-filter__select">
				  </div>
				  <div class="post-filter__submit">
					<button type="submit" class="btn btn-default btn-lg btn-block">Osvježi pretragu</button>
				  </div>
				</form>
			  </div>
			</div>
		<!-- Post Filter / End -->

    <!-- Content
    ================================================== -->
      <div class="site-content">
		<div class="container">
					
					@foreach ($data as $club)

						<div class="post-grid__item col-md-3">
						  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
							<figure class="posts__thumb club-thumb-backgr">
								<a href="{{url('/clubs/'.$club->id)}}"><img class="logo-club-tab-index" src="{{ isset($club->logo) ? asset('images/club_logo/'.$club->logo) : asset('images/SZS-club-logo.png')}}" alt=""></a>
							</figure>
							<div class="posts__inner card__content">
								<h6 class="posts__title ime-sportiste-klub-lista"><a href="{{url('/clubs/'.$club->id)}}">{{$club->name}}</a></h6>
								<div class="posts__excerpt">{{$club->grad}}</div>
							</div>
							<footer class="posts__footer card__footer">
								<a href="{{url('/clubs/'.$club->id)}}" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
							</footer>
						  </div>
						</div>

					@endforeach


					
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					<div class="post-grid__item col-md-3">
					  <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
						<figure class="posts__thumb club-thumb-backgr">
							<a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
						</figure>
						<div class="posts__inner card__content">
							<h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
							<div class="posts__excerpt">Sarajevo, Federacija BiH</div>
						</div>
						<footer class="posts__footer card__footer">
							<a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kluba</a>
						</footer>
					  </div>
					</div>
					
					
					<!-- Pagination -->
					<nav aria-label="Comments Pavigation" class="post__comments-pagination">
					  <ul class="pagination">
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><span>...</span></li>
						<li><a href="#">16</a></li>
					  </ul>
					</nav>
					<!-- Pagination / End -->
					
						
		</div>
	 </div>
    <!-- Content / End -->


@endsection