@extends('layouts.app')

@section('content')

    <div class="site-wrapper clearfix">
        <div class="site-overlay"></div>




        <!-- Pushy Panel - Dark -->
        <aside class="pushy-panel pushy-panel--dark">
            <div class="pushy-panel__inner">
                <header class="pushy-panel__header">
                    <div class="pushy-panel__logo">
                        <a href="#"><img src="{{asset('images/soccer/logo.png')}}" alt=""></a>
                    </div>
                </header>
                <div class="pushy-panel__content">

                    <a href="rekreacija.svezasport.ba" class="push-rekreacija btn-social-counter" target="_blank">
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









        <!-- Content
        ================================================== -->
        <div class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h1 class="page-heading__title">Kontaktirajte <span class="highlight">Nas</span></h1>
                        <ol class="page-heading__breadcrumb breadcrumb">
                            <li><a href="{{url('/')}}">Početna</a></li>
                            <li class="active">Kontaktirajte Nas</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="razmak"></div>
        <div class="site-content">
            <div class="container">

                <!-- Contact Area -->
                <div class="card">
                    <header class="card__header">
                        <h4>Kontakt Forma</h4>
                    </header>
                    <div class="card__content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row form-segment">
                                    <div class="col-md-12">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <h5>Pitanja? Pošaljite nam poruku!</h5>
                                <p>Ukoliko imate bilo kakvih nejasnoća ili možda želite prijaviti neke nepravilnosti na našem sistemu, slobodno nam pošaljite poruku.</p>

                                <div class="spacer-sm"></div>

                                <address>
                                    <strong>Ponedjeljak - Petak:</strong> 9:00 do 00:00
                                </address>
                            </div>
                            <div class="col-md-8">

                                <!-- Contact Form -->
                                <form action="{{url('/contact')}}" method="POST" class="contact-form">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="contact-form-name">Vaše ime <span class="required">*</span></label>
                                                <input type="text" name="name" id="contact-form-name" class="form-control" value="{{old('name')}}" placeholder="Vaše ime...">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="contact-form-email">Vaš Email <span class="required">*</span></label>
                                                <input type="email" name="email" id="contact-form-email" class="form-control" value="{{old('email')}}" placeholder="Vaš email...">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="contact-form-subject">Predmet poruke <span class="required">*</span></label>
                                                <input type="text" name="subject" id="contact-form-subject" class="form-control" value="{{old('subject')}}" placeholder="Predmet poruke...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="contact-form-message">Vaša poruka <span class="required">*</span></label>
                                        <textarea name="poruka" rows="5" class="form-control" placeholder="Unesite vašu poruku ovde...">{{old('message')}}</textarea>
                                    </div>
                                    <div class="form-group form-group--submit">
                                        <button type="submit" class="btn btn-primary-inverse btn-lg btn-block">Pošaljite vašu poruku</button>
                                    </div>
                                </form>
                                <!-- Contact Form / End -->
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Contact Area / End -->

            </div>
        </div>
    </div>


@endsection
