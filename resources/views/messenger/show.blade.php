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


        <div class="site-content">
            <div class="container">

                <div class="row postavke-red">
                @include('messenger.partials.flash')
                <!-- Inbox list -->
                    <div class="post-comments card card--lg messages-start-col">
                        <div class="post-comments__content card__content">
                            @php
                            $firstParticipant = array_key_exists(0, $participants) ? $participants[0] : ' ';
                            $secondParticipant = array_key_exists(1, $participants) ? $participants[1] : ' ';
                            @endphp
                        <h4 class="text-center">Konverzacija između {{$firstParticipant.' i '. $secondParticipant}}</h4>
                            <ul class="comments">

                                @each('messenger.partials.messages', $thread->messages, 'message')
                            </ul>
                        </div>
                        @include('messenger.partials.form-message')
                    </div>
                    <!-- Inbox list / End -->

                </div>
            </div>
        </div>

    </div>
@endsection
