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
                        <h1 class="page-icon-objavi-title"><img src="{{url('assets/images/sportovi-fff.png')}}"></h1>
                        <h1 class="page-heading__title">Svi sportovi</h1>
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
                    <li class="content-filter__item content-filter__item--active"><a class="content-filter__link"><i
                                    class="fa fa-bars"></i>
                            <small>Svi</small>
                            Sportovi</a></li>
                    {{--<li class="content-filter__item "><a href="#" class="content-filter__link"><i
                                    class="fa fa-wheelchair"></i>
                            <small>Sportovi za osobe sa</small>
                            Invaliditetom</a></li>--}}
                </ul>
            </div>
        </nav>
        <!-- Team Pages Filter / End -->

        <!-- Content
        ================================================== -->
        <div class="site-content">
            <div class="container">

                <div class="row igraci-grid">
                    @foreach($sports as $sport)
                        <div class="post-grid__item col-sm-3">
                            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                <figure class="posts__thumb">
                                    <img src="{{url('assets/images/'.$sport->icon)}}" alt="">
                                </figure>
                                <div class="posts__inner card__content">
                                    <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">{{ $sport->name }}</a>
                                    </h6>
                                    <div class="posts__excerpt"></div>
                                </div>
                                <footer class="posts__footer card__footer">
                                    <a href="{{url('/athletes/' . $sport->id . '/new')}}"
                                       class="btn btn-warning btn1-objavi-prodavnicu">Pregled karte sporta <i
                                                class="fa fa-chevron-right"></i></a>
                                </footer>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>

@endsection