@extends('layouts.app')

@section('content')

<div class="site-wrapper clearfix">
    <div class="site-overlay"></div>



   
   <!-- Pushy Panel - Dark -->
    <aside class="pushy-panel pushy-panel--dark">
      <div class="pushy-panel__inner">
        <header class="pushy-panel__header">
          <div class="pushy-panel__logo">
            <a href="index.php"><img src="{{asset('images/soccer/logo.png')}}" srcset="assets/images/soccer/logo@2x.png 2x" alt="Alchemists"></a>
          </div>
        </header>
        <div class="pushy-panel__content">
    
          <a href="www.rekreacija.svezasport.ba" class="push-rekreacija btn-social-counter" target="_blank">
              <div class="btn-social-counter__icon">
                <i class="fa fa-futbol-o"></i>
              </div>
              <h6 class="btn-social-counter__title">SZS Rekreacija</h6>
            </a>

            <a href="aplikacije.php" class="push-aplikacije btn-social-counter" target="_blank">
              <div class="btn-social-counter__icon">
                <i class="fa fa-file"></i>
              </div>
              <h6 class="btn-social-counter__title">SZS Aplikacije</h6>
            </a>

            <a href="sportski-turizam.php" class="push-turizam btn-social-counter" target="_blank">
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
    
    
  

    
    
      
    

    <!-- Content
    ================================================== -->
  <div id="main-home-bg">
    <div class="site-content">
      <div class="container">

        <div class="row">
          <!-- Content -->
          <div class="content col-md-8">

            <!-- Featured News -->
            <div class="card card--clean">
              
              <div class="card__content">

                <!-- Slider -->
                <div class="slick posts posts--slider-featured posts-slider posts-slider--center">

                  <div class="posts__item posts__item--category-1">
                    <a href="#" class="posts__link-wrapper">
                      <figure class="posts__thumb">
                        <img src="{{asset('images/banner-11.jpg')}}" alt="">
                      </figure>
                      <div class="posts__inner">
                        <div class="posts__cat">
                          <span class="label posts__cat-label"><i class="fa fa-tag"></i> SZS APLIKACIJE</span>
                        </div>
                        <h3 class="posts__title">SveZaSport otvara nove aplikacione grantove. Aplicirajte za sportski event u vašem mjestu!</h3>
                        <time datetime="2017-06-28" class="posts__date">28. Jun, 2017.</time>
                      </div>
                    </a>
                  </div>

                  <div class="posts__item posts__item--category-3">
                    <a href="#" class="posts__link-wrapper">
                      <figure class="posts__thumb">
                        <img src="{{asset('images/banner-11.jpg')}}" alt="">
                      </figure>
                      <div class="posts__inner">
                        <div class="posts__cat">
                          <span class="label posts__cat-label"><i class="fa fa-tag"></i> SZS APLIKACIJE</span>
                        </div>
                        <h3 class="posts__title">SveZaSport otvara nove aplikacione grantove. Aplicirajte za sportski event u vašem mjestu!</h3>
                        <time datetime="2017-06-28" class="posts__date">28. Jun, 2017.</time>
                      </div>
                    </a>
                  </div>

                  <div class="posts__item posts__item--category-1">
                    <a href="#" class="posts__link-wrapper">
                      <figure class="posts__thumb">
                        <img src="{{asset('images/banner-11.jpg')}}" alt="">
                      </figure>
                      <div class="posts__inner">
                        <div class="posts__cat">
                          <span class="label posts__cat-label"><i class="fa fa-tag"></i> SZS APLIKACIJE</span>
                        </div>
                        <h3 class="posts__title">SveZaSport otvara nove aplikacione grantove. Aplicirajte za sportski event u vašem mjestu!</h3>
                        <time datetime="2017-06-28" class="posts__date">28. Jun, 2017.</time>
                      </div>
                    </a>
                  </div>

                  <div class="posts__item posts__item--category-3">
                    <a href="#" class="posts__link-wrapper">
                      <figure class="posts__thumb">
                        <img src="{{asset('images/banner-11.jpg')}}" alt="">
                      </figure>
                      <div class="posts__inner">
                        <div class="posts__cat">
                          <span class="label posts__cat-label"><i class="fa fa-tag"></i> SZS APLIKACIJE</span>
                        </div>
                        <h3 class="posts__title">SveZaSport otvara nove aplikacione grantove. Aplicirajte za sportski event u vašem mjestu!</h3>
                        <time datetime="2017-06-28" class="posts__date">28. Jun, 2017.</time>
                      </div>
                    </a>
                  </div>

                  <div class="posts__item posts__item--category-3">
                    <a href="#" class="posts__link-wrapper">
                      <figure class="posts__thumb">
                        <img src="{{asset('images/banner-11.jpg')}}" alt="">
                      </figure>
                      <div class="posts__inner">
                        <div class="posts__cat">
                          <span class="label posts__cat-label"><i class="fa fa-tag"></i> SZS APLIKACIJE</span>
                        </div>
                        <h3 class="posts__title">SveZaSport otvara nove aplikacione grantove. Aplicirajte za sportski event u vašem mjestu!</h3>
                        <time datetime="2017-06-28" class="posts__date">28. Jun, 2017.</time>
                      </div>
                    </a>
                  </div>

                  <div class="posts__item posts__item--category-2">
                    <a href="#" class="posts__link-wrapper">
                      <figure class="posts__thumb">
                        <img src="{{asset('images/banner-11.jpg')}}" alt="">
                      </figure>
                      <div class="posts__inner">
                        <div class="posts__cat">
                          <span class="label posts__cat-label"><i class="fa fa-tag"></i> SZS APLIKACIJE</span>
                        </div>
                        <h3 class="posts__title">SveZaSport otvara nove aplikacione grantove. Aplicirajte za sportski event u vašem mjestu!</h3>
                        <time datetime="20-06-2017" class="posts__date">28. Jun, 2017.</time>
                      </div>
                    </a>
                  </div>

                </div>
                <!-- Slider / End -->

              </div>
            </div>
            <!-- Featured News / End -->

          </div>
          <!-- Content / End -->

          <!-- Sidebar -->
          <div class="col-md-4">
            <!-- Widget: Standings -->
            <aside class="widget card widget--sidebar widget-standings szs-dan-sport">
              <div class="widget__title card__header card__header--has-btn">
                <h4><i class="fa fa-cloud"></i> Dan za sport</h4>
                <a href="#" class="btn btn-default btn-outline btn-xs card-header__button">Nađi termin za rekreaciju</a>
              </div>
              <div class="widget__content card__content">
                <div class="row text-center szs-dan-margin">
                  <h4 class="szs-dan-dan">31.10.2017</h4>
                  <p class="szs-dan-call">Danas je savršen dan za</p>
                  <img src="{{asset('images/cardiogram.png')}}" class="szs-dan-icon" />
                  <h2 class="szs-dan-title">BodyBuilding &amp; Fitness</h2>
                  <p class="szs-dan-opis">Iskoristite današnji dan u sportskom duhu</p>
                  <img src="{{asset('images/straight-letters-szs.png')}}" class="szs-dan-footer" />
                </div>
              </div>
            </aside>
          </div>
          <!-- Sidebar / End -->
        </div>

      </div>
    </div>
  </div>
  <div class="razmak"></div>
  <div class="site-content">
    <div class="container">

        <div class="row">
          <!-- Content -->
          <div class="content col-md-8">
      
    <!-- Single Product Tabbed Content -->
        <div class="product-tabs card card--xlg">
        
          <!-- Nav tabs -->
          <ul class="nav nav-tabs nav-justified nav-product-tabs index-tabs-layout" role="tablist">
            <li role="presentation" class="active"><a href="#tab-klubovi" role="tab" data-toggle="tab"><small>Zadnji dodani</small>Klubovi</a></li>
            <li role="presentation"><a href="#tab-skole" role="tab" data-toggle="tab"><small>Zadnje dodane</small>Škole</a></li>
            <li role="presentation"><a href="#tab-sportisti" role="tab" data-toggle="tab"><small>Zadnji dodani</small>Sportisti</a></li>
      <li role="presentation"><a href="#tab-objekti" role="tab" data-toggle="tab"><small>Zadnji dodani</small>Objekti</a></li>
      <li role="presentation"><a href="#tab-prodavnice" role="tab" data-toggle="tab"><small>Zadnje dodane</small>Prodavnice</a></li>
      <li role="presentation"><a href="#tab-kadrovi" role="tab" data-toggle="tab"><small>Zadnji dodani</small>Kadrovi</a></li>
          </ul>
        
          <!-- Tabovi -->
      
          <div class="tab-content card__content card-home-tabs">
      <!-- Tab: Klubovi -->
            <div role="tabpanel" class="tab-pane fade in active" id="tab-klubovi">
        <div class="row igraci-grid">
          <div class="post-grid__item col-sm-4">
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
          
          <div class="post-grid__item col-sm-4">
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
          
          <div class="post-grid__item col-sm-4">
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
          
          <div class="post-grid__item col-sm-4">
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
          
          <div class="post-grid__item col-sm-4">
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
          
          <div class="post-grid__item col-sm-4">
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
          
        </div>
        
            </div>
            <!-- Tab: Klubovi / End -->
      
      <!-- Tab: Škole -->
            <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-skole">
        <div class="row igraci-grid">
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb club-thumb-backgr">
              <a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
              <div class="posts__excerpt">Sarajevo, Federacija BiH</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila škole</a>
            </footer>
            </div>
          </div>
          
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb club-thumb-backgr">
              <a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
              <div class="posts__excerpt">Sarajevo, Federacija BiH</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila škole</a>
            </footer>
            </div>
          </div>
          
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb club-thumb-backgr">
              <a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
              <div class="posts__excerpt">Sarajevo, Federacija BiH</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila škole</a>
            </footer>
            </div>
          </div>
          
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb club-thumb-backgr">
              <a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
              <div class="posts__excerpt">Sarajevo, Federacija BiH</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila škole</a>
            </footer>
            </div>
          </div>
          
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb club-thumb-backgr">
              <a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
              <div class="posts__excerpt">Sarajevo, Federacija BiH</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila škole</a>
            </footer>
            </div>
          </div>
          
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb club-thumb-backgr">
              <a href="#"><img class="logo-club-tab-index" src="{{asset('images/SZS-club-logo.png')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">FK Sve Za Sport</a></h6>
              <div class="posts__excerpt">Sarajevo, Federacija BiH</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila škole</a>
            </footer>
            </div>
          </div>
          
        </div>
        
            </div>
            <!-- Tab: Škole / End -->
      
      
      <!-- Tab: Sportisti -->
            <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-sportisti">
        <div class="row igraci-grid">
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb">
              <a href="#"><img src="{{asset('images/tarik.jpg')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Tarik Jašarević</a></h6>
              <div class="posts__excerpt">Tuzla, Federacija BiH</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila igrača</a>
            </footer>
            </div>
          </div>
          
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb">
              <a href="#"><img src="{{asset('images/dino-secic.jpg')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Dino Šečić</a></h6>
              <div class="posts__excerpt">Sarajevo, Federacija BiH</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila igrača</a>
            </footer>
            </div>
          </div>
          
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb">
              <a href="#"><img src="{{asset('images/edin-music.JPG')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Edin Musić</a></h6>
              <div class="posts__excerpt">Sarajevo, Federacija BiH</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila igrača</a>
            </footer>
            </div>
          </div>
          
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb">
              <a href="#"><img src="{{asset('images/irfan-garic.jpg')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Irfan Garić</a></h6>
              <div class="posts__excerpt">Tešanj, Federacija BiH</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila igrača</a>
            </footer>
            </div>
          </div>
          
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb">
              <a href="#"><img src="{{asset('images/profilna.JPG')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Nedim Tufekčić</a></h6>
              <div class="posts__excerpt">Tuzla, Federacija BiH</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila igrača</a>
            </footer>
            </div>
          </div>
          
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb">
              <a href="#"><img src="{{asset('images/tarik.jpg')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Tarik Jašarević</a></h6>
              <div class="posts__excerpt">Tuzla, Federacija BiH</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila igrača</a>
            </footer>
            </div>
          </div>
          
        </div>
        
            </div>
            <!-- Tab: Sportisti / End -->
      
      <!-- Tab: Objekti -->
            <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-objekti">
        <div class="row igraci-grid">
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb">
              <a href="#"><img src="{{asset('images/ALIM2987.jpg')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">ZETRA</a></h6>
              <div class="posts__excerpt">Sarajevo, Federacija BiH</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila objekta</a>
            </footer>
            </div>
          </div>
          
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb">
              <a href="#"><img src="{{asset('images/ALIM2987.jpg')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">ZETRA</a></h6>
              <div class="posts__excerpt">Sarajevo, Federacija BiH</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila objekta</a>
            </footer>
            </div>
          </div>
          
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb">
              <a href="#"><img src="{{asset('images/ALIM2987.jpg')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">ZETRA</a></h6>
              <div class="posts__excerpt">Sarajevo, Federacija BiH</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila objekta</a>
            </footer>
            </div>
          </div>
          
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb">
              <a href="#"><img src="{{asset('images/ALIM2987.jpg')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">ZETRA</a></h6>
              <div class="posts__excerpt">Sarajevo, Federacija BiH</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila objekta</a>
            </footer>
            </div>
          </div>
          
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb">
              <a href="#"><img src="{{asset('images/ALIM2987.jpg')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">ZETRA</a></h6>
              <div class="posts__excerpt">Sarajevo, Federacija BiH</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila objekta</a>
            </footer>
            </div>
          </div>
          
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb">
              <a href="#"><img src="{{asset('images/ALIM2987.jpg')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">ZETRA</a></h6>
              <div class="posts__excerpt">Sarajevo, Federacija BiH</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila objekta</a>
            </footer>
            </div>
          </div>
          
        </div>
        
            </div>
            <!-- Tab: Objekti / End -->
      
      <!-- Tab: Prodavnice -->
            <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-prodavnice">
        <div class="row igraci-grid">
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb shop-thumb-backgr">
              <a href="#"><img class="logo-club-tab-index" src="{{asset('images/nike-shop.png')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">SZS Royal Shop</a></h6>
              <div class="posts__excerpt">Sarajevo, Federacija BiH</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila prodavnice</a>
            </footer>
            </div>
          </div>
          
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb shop-thumb-backgr">
              <a href="#"><img class="logo-club-tab-index" src="{{asset('images/nike-shop.png')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">SZS Royal Shop</a></h6>
              <div class="posts__excerpt">Sarajevo, Federacija BiH</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila prodavnice</a>
            </footer>
            </div>
          </div>
          
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb shop-thumb-backgr">
              <a href="#"><img class="logo-club-tab-index" src="{{asset('images/nike-shop.png')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">SZS Royal Shop</a></h6>
              <div class="posts__excerpt">Sarajevo, Federacija BiH</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila prodavnice</a>
            </footer>
            </div>
          </div>
          
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb shop-thumb-backgr">
              <a href="#"><img class="logo-club-tab-index" src="{{asset('images/nike-shop.png')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">SZS Royal Shop</a></h6>
              <div class="posts__excerpt">Sarajevo, Federacija BiH</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila prodavnice</a>
            </footer>
            </div>
          </div>
          
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb shop-thumb-backgr">
              <a href="#"><img class="logo-club-tab-index" src="{{asset('images/nike-shop.png')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">SZS Royal Shop</a></h6>
              <div class="posts__excerpt">Sarajevo, Federacija BiH</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila prodavnice</a>
            </footer>
            </div>
          </div>
          
          
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb shop-thumb-backgr">
              <a href="#"><img class="logo-club-tab-index" src="{{asset('images/nike-shop.png')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">SZS Royal Shop</a></h6>
              <div class="posts__excerpt">Sarajevo, Federacija BiH</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila prodavnice</a>
            </footer>
            </div>
          </div>
          
        </div>
        
            </div>
            <!-- Tab: Prodavnice / End -->
      
      <!-- Tab: Kadrovi -->
            <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-kadrovi">
        <div class="row igraci-grid">
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb">
              <a href="#"><img src="{{asset('images/tarik.jpg')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Tarik Jašarević</a></h6>
              <div class="posts__excerpt">Sportski direktor</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kadra</a>
            </footer>
            </div>
          </div>
          
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb">
              <a href="#"><img src="{{asset('images/dino-secic.jpg')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Dino Šečić</a></h6>
              <div class="posts__excerpt">PR Menadžer</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kadra</a>
            </footer>
            </div>
          </div>
          
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb">
              <a href="#"><img src="{{asset('images/edin-music.JPG')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Edin Musić</a></h6>
              <div class="posts__excerpt">Nogometni trener</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kadra</a>
            </footer>
            </div>
          </div>
          
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb">
              <a href="#"><img src="{{asset('images/irfan-garic.jpg')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Irfan Garić</a></h6>
              <div class="posts__excerpt">Projekt menadžer</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kadra</a>
            </footer>
            </div>
          </div>
          
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb">
              <a href="#"><img src="{{asset('images/profilna.JPG')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Nedim Tufekčić</a></h6>
              <div class="posts__excerpt">Web & Grafički Dizajner</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kadra</a>
            </footer>
            </div>
          </div>
          
          <div class="post-grid__item col-sm-4">
            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
            <figure class="posts__thumb">
              <a href="#"><img src="{{asset('images/tarik.jpg')}}" alt=""></a>
            </figure>
            <div class="posts__inner card__content">
              <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Tarik Jašarević</a></h6>
              <div class="posts__excerpt">Web Dizajner</div>
            </div>
            <footer class="posts__footer card__footer">
              <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kadra</a>
            </footer>
            </div>
          </div>
          
        </div>
        
            </div>
            <!-- Tab: Kadrovi / End -->
    
      </div>
      
     <!-- Tabovi / End -->
    </div>
      
            <div class="row">
              <div class="col-md-12">
                <img src="{{asset('images/marketing-01.png')}}" class="marketing"/>
              </div>
            </div>
      
        </div>
    
    
        <div class="content col-md-4">

            <!-- Widget: Social Buttons - Condensed-->
            <aside class="widget widget--sidebar widget-social widget-social--condensed">
              <a href="#" class="btn-social-counter btn-social-counter--fb" target="_blank">
                <div class="btn-social-counter__icon">
                  <i class="fa fa-facebook"></i>
                </div>
                <h6 class="btn-social-counter__title">Pratite nas na Facebooku</h6>
                <span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span></span>
                <span class="btn-social-counter__add-icon"></span>
              </a>
              <a href="https://twitter.com/danfisher_dev" class="btn-social-counter btn-social-counter--twitter" target="_blank">
                <div class="btn-social-counter__icon">
                  <i class="fa fa-twitter"></i>
                </div>
                <h6 class="btn-social-counter__title">Pratite nas na twitteru</h6>
                <span class="btn-social-counter__count"><span class="btn-social-counter__count-num">142</span></span>
                <span class="btn-social-counter__add-icon"></span>
              </a>
              <a href="#" class="btn-social-counter btn-social-counter--instagram" target="_blank">
                <div class="btn-social-counter__icon">
                  <i class="fa fa-instagram"></i>
                </div>
                <h6 class="btn-social-counter__title">Pratite naš instagram</h6>
                <span class="btn-social-counter__count"><span class="btn-social-counter__count-num">1000</span></span>
                <span class="btn-social-counter__add-icon"></span>
              </a>
            </aside>
            <!-- Widget: Social Buttons - Condensed / End -->
            
            <div class="card card--clean">
              <header class="card__header card__header--has-filter">
                <h4><i class="fa fa-bookmark"></i> Izdvojeni profili</h4>
              </header>
            </div>
            <!-- kartica -->
            <aside class="widget card widget--sidebar widget-player widget-player--soccer">
              
              <div class="widget__content card__content">
                <div class="widget-player__ribbon">
                  <div class="fa fa-star"></div>
                </div>
                <figure class="widget-player__photo">
                  <img src="{{asset('images/edo.JPG')}}" alt class="widget-player__photo">
                </figure>
                <header class="widget-player__header clearfix">
                  <h4 class="widget-player__name">
                    <span class="widget-player__first-name">Edin</span>
                    <span class="widget-player__last-name">Musić</span>
                  </h4>
                </header>
                <div class="widget-player__content">
                  <div class="widget-player__content-inner">
                    <div class="posts__excerpt">
                      Sarajevo, Federacija BiH
                    </div>
                    <div class="posts__excerpt">
                      FK Sve Za Sport
                    </div>
                  </div>
                </div>
              </div>
            </aside>
            <!-- kartica end-->
            <!-- kartica -->
            <aside class="widget card widget--sidebar widget-player widget-player--soccer">
              
              <div class="widget__content card__content">
                <div class="widget-player__ribbon">
                  <div class="fa fa-star"></div>
                </div>
                <figure class="widget-player__photo">
                  <img src="{{asset('images/grid-photo.png')}}" alt class="widget-player__photo">
                </figure>
                <header class="widget-player__header clearfix">
                  <h4 class="widget-player__name">
                    <span class="widget-player__first-name">Fudbalski klub</span>
                    <span class="widget-player__last-name">Sve Za Sport</span>
                  </h4>
                </header>
                <div class="widget-player__content">
                  <div class="widget-player__content-inner">
                    <div class="posts__excerpt">
                      Sarajevo, Federacija BiH
                    </div>
                    <div class="posts__excerpt">
                      Stadion Grbavica
                    </div>
                  </div>
                </div>
            
              </div>
            </aside>
            <!-- kartica end-->
            <!-- kartica -->
            <aside class="widget card widget--sidebar widget-player widget-player--soccer">
              
              <div class="widget__content card__content">
                <div class="widget-player__ribbon">
                  <div class="fa fa-star"></div>
                </div>
                <figure class="widget-player__photo">
                  <img src="{{asset('images/gym-wallpaper-1280x800.jpg')}}" alt class="widget-player__photo">
                </figure>
                <header class="widget-player__header clearfix">
                  <h4 class="widget-player__name">
                    <span class="widget-player__first-name">Teretana</span>
                    <span class="widget-player__last-name">SZS Royal Fitness Center</span>
                  </h4>
                </header>
                <div class="widget-player__content">
                  <div class="widget-player__content-inner">
                    <div class="posts__excerpt">
                      Sarajevo, Federacija BiH
                    </div>
                    <div class="posts__excerpt">
                      Ocjena: 5,0
                    </div>
                  </div>
                </div>
            
              </div>
            </aside>
            <!-- kartica end-->
            <!-- kartica -->
            <aside class="widget card widget--sidebar widget-player widget-player--soccer">
              
              <div class="widget__content card__content">
                <div class="widget-player__ribbon">
                  <div class="fa fa-star"></div>
                </div>
                <figure class="widget-player__photo">
                  <img src="{{asset('images/profilna.JPG')}}" alt class="widget-player__photo">
                </figure>
                <header class="widget-player__header clearfix">
                  <h4 class="widget-player__name">
                    <span class="widget-player__first-name">Nedim</span>
                    <span class="widget-player__last-name">Tufekčić</span>
                  </h4>
                </header>
                <div class="widget-player__content">
                  <div class="widget-player__content-inner">
                    <div class="posts__excerpt">
                      Tuzla, Federacija BiH
                    </div>
                    <div class="posts__excerpt">
                      Web & Grafički Dizajner
                    </div>
                  </div>
                </div>
            
              </div>
            </aside>
            <!-- kartica end-->
          </div>
        </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-2 col-xs-6">
        <ul class="team-stats-box">
                      <li class="team-stats__item team-stats__item--clean">
                        <div class="team-stats__icon team-stats__icon--circle">
                          <img src="{{asset('images/klubovi-fff.png')}}" alt="" class="team-stats__icon-primary">
                        </div>
                        <div class="team-stats__value">15200</div>
                        <div class="team-stats__label">Sportskih Klubova</div>
                      </li>
        </ul>
      </div>
      <div class="col-md-2 col-xs-6">
        <ul class="team-stats-box">
                      <li class="team-stats__item team-stats__item--clean">
                        <div class="team-stats__icon team-stats__icon--circle">
                          <img src="{{asset('images/skole-fff.png')}}" alt="" class="team-stats__icon-primary">
                        </div>
                        <div class="team-stats__value">8500</div>
                        <div class="team-stats__label">Škola Sporta</div>
                      </li>
        </ul>
      </div>
      <div class="col-md-2 col-xs-6">
        <ul class="team-stats-box">
                      <li class="team-stats__item team-stats__item--clean">
                        <div class="team-stats__icon team-stats__icon--circle">
                          <img src="{{asset('images/objekti-fff.png')}}" alt="" class="team-stats__icon-primary">
                        </div>
                        <div class="team-stats__value">5221</div>
                        <div class="team-stats__label">Sportskih Objekata</div>
                      </li>
        </ul>
      </div>
      <div class="col-md-2 col-xs-6">
        <ul class="team-stats-box">
                      <li class="team-stats__item team-stats__item--clean">
                        <div class="team-stats__icon team-stats__icon--circle">
                          <img src="{{asset('images/sportisti-fff.png')}}" alt="" class="team-stats__icon-primary">
                        </div>
                        <div class="team-stats__value">82557</div>
                        <div class="team-stats__label">BH Sportista</div>
                      </li>
        </ul>
      </div>
      <div class="col-md-2 col-xs-6">
        <ul class="team-stats-box">
                      <li class="team-stats__item team-stats__item--clean">
                        <div class="team-stats__icon team-stats__icon--circle">
                          <img src="{{asset('images/oprema-fff.png')}}" alt="" class="team-stats__icon-primary">
                        </div>
                        <div class="team-stats__value">221</div>
                        <div class="team-stats__label">Prodavnica Opreme</div>
                      </li>
        </ul>
      </div>
      <div class="col-md-2 col-xs-6">
        <ul class="team-stats-box">
                      <li class="team-stats__item team-stats__item--clean">
                        <div class="team-stats__icon team-stats__icon--circle">
                          <img src="{{asset('images/kadrovi-fff.png')}}" alt="" class="team-stats__icon-primary">
                        </div>
                        <div class="team-stats__value">6200</div>
                        <div class="team-stats__label">Stručnih Kadrova</div>
                      </li>
                    </ul>
        </div>
      </div>
    </div>
  </div>


@endsection
