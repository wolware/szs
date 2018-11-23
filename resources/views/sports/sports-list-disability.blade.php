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
                    <li class="content-filter__item content-filter__item--active"><a href="{{url('/sports')}}" style="cursor: pointer;" class="content-filter__link"><i
                                    class="fa fa-soccer-ball-o"></i>
                            <small></small>
                            Sportovi</a></li>
                    <li class="content-filter__item content-filter__item--active"><a href="{{url('/sports-disability')}}" class="content-filter__link" style="cursor: pointer;"><i
                                    class="fa fa-wheelchair"></i>
                            <small></small>
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

                    @foreach($sports as $sport)
                        <div class="post-grid__item col-sm-3">
                        <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                            <figure class="posts__thumb">
                                <a href="{{url('/sports/'.$sport->id)}}">
                                    <img src="{{url('assets/images/'.$sport->icon)}}" alt="">
                                </a>
                            </figure>
                            <div class="posts__inner card__content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="{{url('/sports/'.$sport->id)}}">{{$sport->name}}</a></h6>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="{{url('/sports/'.$sport->id)}}" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>

            </div>
        </div>
    </div>
@endsection