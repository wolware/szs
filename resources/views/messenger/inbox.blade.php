@extends('layouts.app')

@section('content')

<div class="site-wrapper clearfix">
    <div class="site-overlay"></div>


    <!-- Header
        ================================================== -->

@include('includes.pushy-panel')
<!-- Header / End -->

    <!-- Page Heading
  ================================================== -->
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h1 class="page-heading__title"><i class="fa fa-download fa-2x"></i></h1>
                    <h1 class="page-heading__title">Inbox</h1>
                    <ol class="page-heading__breadcrumb breadcrumb">
                        <li class="registracija-podnaslov">Poruke</li>
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
                <li class="content-filter__item content-filter__item--active"><a href="{{url('/messages')}}" class="content-filter__link"><i class="fa fa-download"></i><small>Privatne</small>Poruke</a></li>
            </ul>
        </div>
    </nav>
    <!-- Team Pages Filter / End -->

    <!-- Content
    ================================================== -->
    <div class="site-content">
        <div class="container">

            <div class="row postavke-red">
            @include('messenger.partials.flash')
                <!-- Inbox list -->
                <div class="post-comments card card--lg messages-start-col">
                    <div class="post-comments__content card__content">
                        <div class="row">
                            <div class="col-md-offset-5 col-md-12">
                                <a class="btn btn-info" href="{{url('/messages/create')}}">Nova poruka</a>
                            </div>
                        </div>
                        <hr>
                        <ul class="comments">

                            @each('messenger.partials.thread', $threads, 'thread', 'messenger.partials.no-threads')
                        </ul>

                       {{-- <!-- Inbox Pagination -->
                        <nav aria-label="Comments Pavigation" class="post__comments-pagination">
                            <ul class="pagination">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><span>...</span></li>
                                <li><a href="#">16</a></li>
                            </ul>
                        </nav>
                        <!-- Inbox Pagination / End -->--}}

                    </div>
                </div>
                <!-- Inbox list / End -->

            </div>

        </div>
    </div>
</div>
    <!-- Content / End -->

@endsection