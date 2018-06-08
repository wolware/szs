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
                        <h1 class="page-icon-objavi-title"><img src="{{asset('images/sportovi-fff.png')}}"></h1>
                        <h1 class="page-heading__title">Pregled svih sportova</h1>
                        <ol class="page-heading__breadcrumb breadcrumb">
                            <li class="registracija-podnaslov">Dostupnih u Bosni i Hercegovini</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Pages Filter -->
        <nav class="content-filter">
            <div class="container">
                <ul class="content-filter__list">
                    <li class="content-filter__item content-filter__item--active"><a class="content-filter__link"><i
                                    class="fa fa-bars"></i>
                            <small>Svi</small>
                            Sportovi</a></li>
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
                                <a href="">
                                    <img src="{{asset('images/sports/aikido_desktop_wallpaper_7.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Aikido</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/amel_tuka-1920x1080.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Atletika</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/badminton.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Badminton</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/biciklizam.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Biciklizam</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/bob.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Bob</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/bocanje.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Boćanje</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/fitness.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Bodybuilding &amp; Fitness</a></h6>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/boks.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Boks</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/curling.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Curling</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/tegovi.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Dizanje tegova</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/gimnastika.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Gimnastika</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/golf.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Golf</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/hokej.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Hokej</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/hrvanje.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Hrvanje</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/jiu-jitsu.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Jiu Jitsu</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/judo.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Judo</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/kkr.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Kajak, kanu i rafting</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/karate.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Karate</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/kickbox.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Kick Box</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/klizanje.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Klizanje</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/konjicki.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Konjički sportovi</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/kosarka.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Košarka</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/kungfu.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Kung Fu</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/kuglanje.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Kuglanje</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/edin-dzeko.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Nogomet</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/macevanje.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Mačevanje</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/odbojka.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Odbojka</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/planinarstvo.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Planinarstvo</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/plivanje.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Plivanje</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/ragbi.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Ragbi</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/ronjenje.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Ronjenje</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/rukomet.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Rukomet</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/skijanje.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Skijanje</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/ribolov.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Sportski ribolov</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/stoni-tenis.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Stoni tenis</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/strelicarstvo.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Streličarstvo</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/streljastvo.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Streljaštvo</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/sah.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Šah</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/taekwondo.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Taekwondo</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/tenis.jpeg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Tenis</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/triatlon.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Triatlon</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/vaterpolo.JPG')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Vaterpolo</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/vazduhoplovstvo.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Vazduhoplovstvo</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="">
                                    <img src="{{asset('images/sports/veslanje.jpg')}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="">Veslanje</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

@endsection