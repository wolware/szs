@extends ('layouts.app')

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
                        <h1 class="page-icon-objavi-title"><img src="{{asset('images/small-calendar.png')}}"></h1>
                        <h1 class="page-heading__title">Kalendar sportskih događaja</h1>
                        <ol class="page-heading__breadcrumb breadcrumb">
                            <li class="registracija-podnaslov">U Bosni i Hercegovini</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-content">
            <div class="container">
                <div class="row">
                    <div id="eventsCalendar"></div>
                </div>
            </div>
        </div>
        <!-- Content / End -->
    </div>


@endsection