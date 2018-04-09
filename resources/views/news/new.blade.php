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
                        <a href="{{url('/')}}"><img src="{{asset('images/soccer/logo.png')}}" alt="Alchemists"></a>
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
        <div class="page-heading objavi-steps">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h1 class="page-icon-objavi-title"><img src="{{asset('images/icons/dodaj-klub.png')}}"></h1>
                        <h1 class="page-heading__title">Objavi Vijest</h1>
                        <ol class="page-heading__breadcrumb breadcrumb">
                            <li class="registracija-podnaslov">Dodavanje nove vijesti</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content
        ================================================== -->
        <div class="site-content">
            <div class="container">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row profil-content-b06">
                    <!-- Main content -->
                    <div class="sidebar col-md-12 overscreen">

                        <!-- Single Product Tabbed Content -->
                        <div class="product-tabs card card--xlg">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-justified nav-product-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#tab-opcenito" role="tab" data-toggle="tab"><i class="fa fa-info-circle"></i><small>Nova</small>Vijest</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content card__content">


                                <!-- Tab: Općenito -->
                                <div role="tabpanel" class="tab-pane fade in active" id="tab-opcenito">
                                    <div class="row">
                                        <form id="createNewClub" role="form" action="{{ url('/news/new/create') }}" method="POST" enctype="multipart/form-data" >
                                            {!! csrf_field() !!}
                                            <div class="row identitet-style">


                                                <div class="col-md-12">

                                                    <div class="form-group col-md-12">
                                                        <label for="naslov-vijesti"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"> Naslov vijesti kluba*</label>
                                                        <input type="text" name="naslov" id="naslov-vijesti" class="form-control" placeholder="Unesite naslov vijesti" maxlength="255" required>
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="row form-segment">
                                                <header class="card__header">
                                                    <h4><i class="fa fa-newspaper-o"></i> Sadržaj vijesti</h4>
                                                </header>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label for="sadrzaj"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"> Sadržaj</label>
                                                <textarea class="form-control" rows="20" id="sadrzaj" name="sadrzaj" maxlength="1050"></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="form-group form-group--submit col-md-6">
                                                    <a href="{{url('profile/new')}}" class="btn btn-default btn-sm btn-block btn-nazad"><i class="fa fa-chevron-left"></i> Nazad</a>
                                                </div>
                                                <div class="form-group form-group--submit col-md-6" >
                                                    <button  class="btn btn-default btn-sm btn-block btn-dalje bt-zavrsi" type="submit"><i class="fa fa-plus-circle"></i> Završi i objavi</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Tab: Općenito / End -->

                                <!-- Single Product Tabbed Content / End -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Content / End -->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'sadrzaj' );
        </script>
    </div>
@endsection
