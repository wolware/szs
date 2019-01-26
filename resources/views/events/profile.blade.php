@extends('layouts.app')

@section('content')

 <div class="site-wrapper clearfix">
    <div class="site-overlay"></div>


    @include('includes.pushy-panel')
    
   
    <!-- Player Heading
    ================================================== -->
    <div class="player-heading">
      <div class="container">
    
        <div class="player-info__title player-info__title--mobile">
          <h1 class="player-info__name">
            <span class="player-info__first-name">{{$event->type->name}} ({{$event->sport->name}})</span>
            <span class="player-info__last-name">{{$event->name}}</span>
          </h1>
        </div>
    
        <div class="player-info">
    
          <!-- Player Photo -->
          <div class="player-info__item player-info__item--photo">
            <figure class="player-info__photo">
              <img class="frontend-profilna-slika" src="{{asset('images/event_images/'. $event->image)}}" alt="">
            </figure>
          </div>
          <!-- Player Photo / End -->
    
          <!-- Player Details -->
          <div class="player-info__item player-info__item--details">
    
            <div class="player-info__title player-info__title--desktop">
              <h1 class="player-info__name">
                <span class="player-info__first-name">{{$event->type->name}} ({{$event->sport->name}})</span>
                <span class="player-info__last-name">{{$event->name}}</span>
              </h1>
            </div>
			
			<div class="player-info-details">
                @if(Auth::check())
                  @if(Auth::user()->id == $event->user->id)
                    <a href="{{ url('/events/' . $event->id . '/edit') }}" class="btn btn-primary-inverse btn-icon product__add-to-cart stats-klub-middle"><i class="fa fa-edit"></i> Uredi</a>
                  @endif
                @endif
				<a href="#" class="btn btn-primary-inverse btn-icon product__add-to-cart"><i class="fa fa-share-alt"></i> Podijeli</a>
            </div>
			
          </div>
          <!-- Player Details / End -->
		  
		  <!-- Player Stats -->
          <div class="player-info__item player-info__item--stats">
            <div class="player-info__item--stats-inner">
    
              <!-- Profil stats -->
            <aside class="widget widget--sidebar widget-social short-stats-bars">
              <a class="btn-widget-stats">
                <div class="btn-social-counter__icon">
                  <i class="fa fa-eye"></i>
                </div>
                <h6 class="btn-social-counter__title brojac-profil">256589</h6>
                <span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Pregleda</span>
              </a>
              <a class="btn-widget-stats">
                <div class="btn-social-counter__icon">
                  <i class="fa fa-share-alt"></i>
                </div>
                <h6 class="btn-social-counter__title brojac-profil">4645</h6>
                <span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Podjela</span>
              </a>
              <a class="btn-widget-stats">
                <div class="btn-social-counter__icon">
                  <i class="fa fa-heart-o"></i>
                </div>
                <h6 class="btn-social-counter__title brojac-profil">55212</h6>
                <span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Sviđanja</span>
              </a>
            </aside>
            <!-- Profil stats / End -->
			</div>
		  </div>
			  
        </div>
      </div>
    </div>
    

    <!-- Content
    ================================================== -->

	<div class="site-content">
      <div class="container">

        <div class="row profil-content-b06">

          <!-- Content -->
          <div class="content col-md-4 overscreen">

            <!-- Widget: Osnovne info -->
                <aside class="widget card card--has-table widget--sidebar widget-lineup-table">
                  <div class="widget__title card__header">
                    <h4><i class="fa fa-info-circle"></i> Osnovne informacije</h4>
                  </div>
                  <div class="widget__content card__content">
                
                    <!-- Osnovne info -->
                    <div class="table-responsive">
                      <table class="table lineup-table">
                        <tbody>

                          <tr>
							<td class="lineup__info">
                              <img class="flow-icons-012" src="{{asset('images/icons/small-calendar.svg')}}" alt="">
                            </td>
                            <td class="lineup__num">Datum početka</td>
                            <td class="lineup__name">{{date('d.m.Y',strtotime($event->date_start))}}</td>
                          </tr>
                          <tr>
                            <td class="lineup__info">
                              <img class="flow-icons-012" src="{{asset('images/icons/small-calendar.svg')}}" alt="">
                            </td>
                            <td class="lineup__num">Vrijeme početka</td>
                            <td class="lineup__name">{{date('H:i', strtotime($event->time_start))}}</td>
                          </tr>
						  <tr>
							<td class="lineup__info">
                              <img class="flow-icons-012" src="{{asset('images/icons/gledaoci.svg')}}" alt="">
                            </td>
                            <td class="lineup__num">Maksimalan broj učesnika</td>
                            <td class="lineup__name">{{$event->max_paticipants or '-'}}</td>
                          </tr>
                          @if($event->type->name == 'Turnir')
                            <tr>
                              <td class="lineup__info">
                                <img class="flow-icons-012" src="{{asset('images/icons/coins-money-stack.svg')}}" alt="">
                              </td>
                              <td class="lineup__num">Kotizacija za učešće (KM)</td>
                              <td class="lineup__name">{{$event->registration_fee}}</td>
                            </tr>
                            <tr>
                              <td class="lineup__info">
                                <img class="flow-icons-012" src="{{asset('images/icons/coins-money-stack.svg')}}" alt="">
                              </td>
                              <td class="lineup__num">Glavna nagrada (KM)</td>
                              <td class="lineup__name">{{$event->first_place_award}}</td>
                            </tr>
                            <tr>
                              <td class="lineup__info">
                              </td>
                              <td class="lineup__num">Trajanje turnira (dana)</td>
                              <td class="lineup__name">{{$event->duration}}</td>
                            </tr>
                          @endif
                        </tbody>
                      </table>
                    </div>
					</div>
                    <!-- Osnovne info / End -->
			</aside>
			<!-- Widget: Osnovne info / End -->

			
			<!-- Widget: SZS info -->
                <aside class="widget card card--has-table widget--sidebar widget-lineup-table">
                  <div class="widget__title card__header">
                    <h4><i class="fa fa-id-card-o"></i> SveZaSport karta</h4>
                  </div>
                  <div class="widget__content card__content">
                
                    <!-- SZS info -->
                    <div class="table-responsive">
                      <table class="table lineup-table">
                        <tbody>
						  <tr>
							<td class="lineup__info">
                              <img class="flow-icons-012" src="{{asset('images/icons/calendar-add-event-button-with-plus-sign.svg')}}" alt="">
                            </td>
                            <td class="lineup__num">Dio SveZaSport</td>
                            <td class="lineup__name">{{date('d.m.Y',$event->created_at->timestamp)}}</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- SZS info / End -->
				</div>
			</aside>
			<!-- Widget: SZS info / End -->
			<!-- Widget: Marketing sidebar -->
				<div class="row">
            	<div class="col-md-12">
            		<img src="{{asset('images/reklama-sidebar.png')}}" class="reklama-klubovi-sidebar"/>
            	</div>
            </div>
			<!-- Widget: Marketing sidebar / End -->
			
		</div>

          <!-- Main content -->
        <div class="sidebar col-md-8 overscreen">

       <!-- Single Product Tabbed Content -->
        <div class="product-tabs card card--xlg">
        
          <!-- Nav tabs -->
          <ul class="nav nav-tabs nav-justified nav-product-tabs" role="tablist">
            <li role="presentation"><a href="#tab-opcenito" role="tab" data-toggle="tab"><i class="fa fa-info-circle"></i><small>Općenito o</small>Eventu</a></li>
            <li role="presentation"><a href="#tab-vremeplov" role="tab" data-toggle="tab"><i class="fa fa-history"></i><small>Opis</small>Eventa</a></li>
			<li role="presentation"><a href="#tab-vijesti2" role="tab" data-toggle="tab"><i class="fa fa-newspaper-o"></i><small>Povezane</small>Vijesti</a></li>
          </ul>
        
          <!-- Tab panes -->
          <div class="tab-content card__content">

            <div role="tabpanel" class="tab-pane fade in active" id="tab-opcenito">

              <div class="row grupa-gadgets">
                <div class="col-md-6">
                  <!-- Widget: Lokacija info -->
                  <aside class="widget card card--has-table widget--sidebar widget-lineup-table">

                    <div class="widget__content card__content main-info-profil-start-01 gadget-padding">

                      <!-- Lokacija info -->
                      <div class="table-responsive">
                        <table class="table lineup-table">
                          <tbody>

                          <tr>
                            <td class="lineup__info gadget-no-border">
                              <img class="flow-icons-012" src="{{asset('images/icons/office-block.svg')}}" alt="">
                            </td>
                            <td class="lineup__num gadget-no-border">Grad/Adresa održavanja</td>
                            <td class="lineup__name gadget-no-border">{{$event->city}}</td>
                          </tr>
                          @if($event->regions->has('municipality'))
                            <tr>
                              <td class="lineup__info gadget-no-border">
                                <img class="flow-icons-012" src="{{asset('images/icons/opcina.svg')}}" alt="">
                              </td>
                              <td class="lineup__num gadget-no-border">Općina</td>
                              <td class="lineup__name gadget-no-border">{{ $event->regions->get('municipality') }}</td>
                            </tr>
                          @endif
                          @if($event->regions->has('region'))
                            <tr>
                              <td class="lineup__info gadget-no-border">
                                <img class="flow-icons-012" src="{{asset('images/icons/placeholder.svg')}}" alt="">
                              </td>
                              <td class="lineup__num gadget-no-border">Kanton/Regija</td>
                              <td class="lineup__name gadget-no-border">{{ $event->regions->get('region') }}</td>
                            </tr>
                          @endif
                          </tbody>
                        </table>
                      </div>
                      <!-- Lokacija info / End -->
                    </div>
                  </aside>
                  <!-- Widget: Lokacija info / End -->

                </div>

                <div class="col-md-6">
                  <!-- Widget: SZS info -->
                  <aside class="widget card card--has-table widget--sidebar widget-lineup-table">

                    <div class="widget__content card__content main-info-profil-start-01 gadget-padding">

                      <!-- SZS info -->
                      <div class="table-responsive">
                        <table class="table lineup-table">
                          <tbody>
                          @if($event->regions->has('province'))
                            <tr>
                              <td class="lineup__info gadget-no-border">
                                <img class="flow-icons-012" src="{{asset('images/icons/map.svg')}}" alt="">
                              </td>
                              <td class="lineup__num gadget-no-border">Entitet/Pokrajina</td>
                              <td class="lineup__name gadget-no-border">{{ $event->regions->get('province') }}</td>
                            </tr>
                          @endif
                          @if($event->regions->has('country'))
                            <tr>
                              <td class="lineup__info gadget-no-border">
                                <img class="flow-icons-012" src="{{asset('images/icons/earth.svg')}}" alt="">
                              </td>
                              <td class="lineup__num gadget-no-border">Država</td>
                              <td class="lineup__name gadget-no-border">{{ $event->regions->get('country') }}</td>
                            </tr>
                          @endif
                          @if($event->regions->has('continent'))
                            <tr>
                              <td class="lineup__info gadget-no-border">
                                <img class="flow-icons-012" src="{{asset('images/icons/international-delivery.svg')}}" alt="">
                              </td>
                              <td class="lineup__num gadget-no-border">Kontinent</td>
                              <td class="lineup__name gadget-no-border">{{ $event->regions->get('continent') }}</td>
                            </tr>
                          @endif
                          </tbody>
                        </table>
                      </div>
                      <!-- SZS info / End -->
                    </div>
                  </aside>
                  <!-- Widget: SZS info / End -->

                </div>
                <!-- Tab: Općenito / End -->

              </div>

              <div class="row">
                <div class="col-md-12">
                  <img src="{{asset('assets/images/REKLAMA-752-100.png')}}" class="reklama-klubovi-alt1"/>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="widget__title card__header istaknute-licnosti-naslov">
                    <h4><i class="fa fa-play-circle-o"></i> Navigacija</h4>
                  </div>
                  <iframe src = "https://maps.google.com/maps?q={{ $event->latitude }},{{ $event->longitude }}&amp;output=embed" width="752" height="423" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>


            </div>

            <!-- Tab: Vremeplov -->
            <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-vremeplov">

              <div class="row">
                <div class="col-md-12">
                  <img src="{{asset('assets/images/REKLAMA-752-100.png')}}" class="reklama-klubovi-vitrina"/>
                </div>
              </div>

              <!-- Article -->
              <article class="card card--lg post post--single">

                <figure class="post__thumbnail">
                  <img class="vitrina-slika" src="{{asset('assets/images/a1-photo-vremeplov.png')}}" alt="">
                </figure>
                <header class="post__header">
                  <h2 class="post__title">Opis eventa</h2>
                </header>

                <div class="post__content">
                  <p>{{$event->description or 'Opis nije unsesen.'}}</p>
                </div>
              </article>
              <!-- Article / End -->

            </div>
            <!-- Tab: Vremeplov / End -->
			<!-- Tab: Vijesti -->
			<div role="tabpanel" class="tab-pane fade" id="tab-vijesti2">
			
			
				<div class="row">
					<div class="col-md-12">
						<img src="{{asset('images/REKLAMA-752-100.png')}}" class="reklama-klubovi-igraci"/>
					</div>
				</div>
				
			
            <!-- Posts List -->
			<div class="posts posts--cards posts--cards-thumb-left post-list">

              <div class="post-list__item">
                <div class="posts__item vijest-col-col posts__item--card posts__item--category-1 card">
                  <figure class="vijesti__thumb">
                    <a href="#"><img class="slika-vijest-tab" src="{{asset('images/newspaper-laptop-hd-wallpaper_1920x1080.jpg')}}" alt=""></a>
                  </figure>
                  <div class="posts__inner">
                    <div class="card__content osn-vijest-tab">
                      <div class="posts__cat">
                        <span class="label posts__cat-label">Premier Liga BiH</span>
                      </div>
                      <h6 class="posts__title"><a href="#">FK Sve Za Sport nanizao četiri ligaške pobjede za redom</a></h6>
                      <time datetime="2016-08-23" class="posts__date">25. Oktobar, 2017.</time>
                    </div>
                    <footer class="posts__footer card__footer">
                      <div class="post-author">
                        <figure class="post-author__avatar">
                          <img src="{{asset('images/tarik.jpg')}}" alt="Post Author Avatar">
                        </figure>
                        <div class="post-author__info">
                          <h4 class="post-author__name">Tarik Jašarević</h4>
                        </div>
                      </div>
                      <ul class="post__meta vijesti_profili meta">
                        <li class="meta__item meta__item--views">2369</li>
                      </ul>
                    </footer>
                  </div>
                </div>
              </div>
			  
			  <div class="post-list__item">
                <div class="posts__item vijest-col-col posts__item--card posts__item--category-1 card">
                  <figure class="vijesti__thumb">
                    <a href="#"><img class="slika-vijest-tab" src="{{asset('images/newspaper-laptop-hd-wallpaper_1920x1080.jpg')}}" alt=""></a>
                  </figure>
                  <div class="posts__inner">
                    <div class="card__content osn-vijest-tab">
                      <div class="posts__cat">
                        <span class="label posts__cat-label">Premier Liga BiH</span>
                      </div>
                      <h6 class="posts__title"><a href="#">FK Sve Za Sport nanizao četiri ligaške pobjede za redom</a></h6>
                      <time datetime="2016-08-23" class="posts__date">25. Oktobar, 2017.</time>
                    </div>
                    <footer class="posts__footer card__footer">
                      <div class="post-author">
                        <figure class="post-author__avatar">
                          <img src="{{asset('images/tarik.jpg')}}" alt="Post Author Avatar">
                        </figure>
                        <div class="post-author__info">
                          <h4 class="post-author__name">Tarik Jašarević</h4>
                        </div>
                      </div>
                      <ul class="post__meta vijesti_profili meta">
                        <li class="meta__item meta__item--views">2369</li>
                      </ul>
                    </footer>
                  </div>
                </div>
              </div>
			  
			  <div class="post-list__item">
                <div class="posts__item vijest-col-col posts__item--card posts__item--category-1 card">
                  <figure class="vijesti__thumb">
                    <a href="#"><img class="slika-vijest-tab" src="{{asset('images/newspaper-laptop-hd-wallpaper_1920x1080.jpg')}}" alt=""></a>
                  </figure>
                  <div class="posts__inner">
                    <div class="card__content osn-vijest-tab">
                      <div class="posts__cat">
                        <span class="label posts__cat-label">Premier Liga BiH</span>
                      </div>
                      <h6 class="posts__title"><a href="#">FK Sve Za Sport nanizao četiri ligaške pobjede za redom</a></h6>
                      <time datetime="2016-08-23" class="posts__date">25. Oktobar, 2017.</time>
                    </div>
                    <footer class="posts__footer card__footer">
                      <div class="post-author">
                        <figure class="post-author__avatar">
                          <img src="{{asset('images/tarik.jpg')}}" alt="Post Author Avatar">
                        </figure>
                        <div class="post-author__info">
                          <h4 class="post-author__name">Tarik Jašarević</h4>
                        </div>
                      </div>
                      <ul class="post__meta vijesti_profili meta">
                        <li class="meta__item meta__item--views">2369</li>
                      </ul>
                    </footer>
                  </div>
                </div>
              </div>
			  
			  <div class="post-list__item">
                <div class="posts__item vijest-col-col posts__item--card posts__item--category-1 card">
                  <figure class="vijesti__thumb">
                    <a href="#"><img class="slika-vijest-tab" src="{{asset('images/newspaper-laptop-hd-wallpaper_1920x1080.jpg')}}" alt=""></a>
                  </figure>
                  <div class="posts__inner">
                    <div class="card__content osn-vijest-tab">
                      <div class="posts__cat">
                        <span class="label posts__cat-label">Premier Liga BiH</span>
                      </div>
                      <h6 class="posts__title"><a href="#">FK Sve Za Sport nanizao četiri ligaške pobjede za redom</a></h6>
                      <time datetime="2016-08-23" class="posts__date">25. Oktobar, 2017.</time>
                    </div>
                    <footer class="posts__footer card__footer">
                      <div class="post-author">
                        <figure class="post-author__avatar">
                          <img src="{{asset('images/tarik.jpg')}}" alt="Post Author Avatar">
                        </figure>
                        <div class="post-author__info">
                          <h4 class="post-author__name">Tarik Jašarević</h4>
                        </div>
                      </div>
                      <ul class="post__meta vijesti_profili meta">
                        <li class="meta__item meta__item--views">2369</li>
                      </ul>
                    </footer>
                  </div>
                </div>
              </div>
			  
			  <div class="post-list__item">
                <div class="posts__item vijest-col-col posts__item--card posts__item--category-1 card">
                  <figure class="vijesti__thumb">
                    <a href="#"><img class="slika-vijest-tab" src="{{asset('images/newspaper-laptop-hd-wallpaper_1920x1080.jpg')}}" alt=""></a>
                  </figure>
                  <div class="posts__inner">
                    <div class="card__content osn-vijest-tab">
                      <div class="posts__cat">
                        <span class="label posts__cat-label">Premier Liga BiH</span>
                      </div>
                      <h6 class="posts__title"><a href="#">FK Sve Za Sport nanizao četiri ligaške pobjede za redom</a></h6>
                      <time datetime="2016-08-23" class="posts__date">25. Oktobar, 2017.</time>
                    </div>
                    <footer class="posts__footer card__footer">
                      <div class="post-author">
                        <figure class="post-author__avatar">
                          <img src="{{asset('images/tarik.jpg')}}" alt="Post Author Avatar">
                        </figure>
                        <div class="post-author__info">
                          <h4 class="post-author__name">Tarik Jašarević</h4>
                        </div>
                      </div>
                      <ul class="post__meta vijesti_profili meta">
                        <li class="meta__item meta__item--views">2369</li>
                      </ul>
                    </footer>
                  </div>
                </div>
              </div>

              

            </div>
			
			<!-- Vijesti stranice -->
				<nav class="post-pagination text-center">
					<ul class="pagination pagination--condensed pagination--lg">
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
					</ul>
				</nav>
				<!-- Vijesti stranice / End -->
				
            <!-- Posts List / End -->
			</div>
            <!-- Tab: Vijesti / End -->
			
        <!-- Single Product Tabbed Content / End -->
		</div>
		</div>
		</div>
		</div>
	
	  </div>
	 </div>
	</div>
    <!-- Content / End -->


@endsection