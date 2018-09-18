@extends('layouts.app')

@section('content')
    <div class="site-wrapper clearfix">
        <div class="site-overlay"></div>


        <!-- Header
            ================================================== -->
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
                    <li class="content-filter__item content-filter__item--active"><a href="{{url('/messages')}}"
                                                                                     class="content-filter__link"><i
                                    class="fa fa-download"></i>
                            <small>Privatne</small>
                            Poruke</a></li>
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
                    <div class="post-comments card card--lg messages-start-col">
                        <br>
                        <h1 class="text-center">Pošalji novu poruku</h1>
                        <form action="{{ route('messages.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="col-md-6 col-md-offset-3">
                                <!-- Subject Form Input -->
                                <div class="form-group">
                                    <label class="control-label">Predmet</label>
                                    <input type="text" class="form-control" name="subject" placeholder="Predmet"
                                           value="{{ old('subject') }}">
                                </div>

                                <!-- Message Form Input -->
                                <div class="form-group">
                                    <label for="poruka" class="control-label">Poruka</label>
                                    <textarea name="message" id="poruka"
                                              class="form-control">{{ old('message') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="primalac" class="control-label">Primalac</label>
                                    <input id="primalac" class="form-control">
                                </div>
                                <input name="recipients" id="recipient" type="hidden">

                                <!-- Submit Form Input -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary form-control">Pošalji</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content / End -->

    @if(Request::get('user') && is_numeric(Request::get('user')))
    <script>
        document.getElementById('recipient').value = '{{Request::get('user')}}';
        document.getElementById('primalac').value = '{{Request::get('email')}}';
    </script>
    @endif
@endsection
