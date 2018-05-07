@extends('layouts.app')

@section('content')


    <div class="site-wrapper clearfix">
        <div class="site-overlay"></div>


        <!-- Header
            ================================================= -->

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
                                        <!-- Successfully added message -->
                                        @if (Session::has('success'))
                                            <div class="col-md-12">
                                                <div id="uspjesnoDodano" class="alert alert-success">{{ Session::get('success') }}</div>
                                            </div>
                                        @endif
                                        <!-- Server side errors -->
                                        @if ($errors->any())
                                            <div class="col-md-12">
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        @endif

                                        <form id="createNewClub" role="form" action="{{ url('/news/new/create') }}" method="POST" enctype="multipart/form-data" >
                                            {!! csrf_field() !!}

                                            <div class="row identitet-style">

                                                <div class="col-md-6 objavi-klub-logo-setup">

                                                    <div class="col-md-7">

                                                        <div class="alc-staff__photo">
                                                            <img class="slika-upload-klub" src="{{ asset('images/vijesti/vijesti-dodaj-sliku.png') }}" alt="">
                                                        </div>

                                                    </div>

                                                    <div class="col-md-5 sadrzaj-slike">

                                                        <p class="dodaj-sliku-naslov klub-a1">Slika vijesti</p>
                                                        <p class="dodaj-sliku-call">Identitet vijesti</p>
                                                        <label class="btn btn-default btn-xs btn-file dodaj-sliku-button">
                                                            Odaberi sliku... <input type="file" id="vijestSlika" name="slika" style="display: none;">
                                                        </label>
                                                        <div class="info001">
                                                            <p class="info-upload-slike">Preporučene dimenzije za sliku:</p>
                                                            <p class="info-upload-slike">Minimalno: 980x720 px</p>
                                                        </div>

                                                    </div>
                                                </div>


                                                <div class="col-md-6">

                                                    <div class="form-group col-md-12">
                                                        <label for="naslov-vijesti"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"> Naslov vijesti*</label>
                                                        <input type="text" name="naslov" id="naslov-vijesti" class="form-control" placeholder="Unesite naslov vijesti" maxlength="255" required value="{{ old('naslov') }}">
                                                    </div>

                                                    <div class="form-group col-md-12">
                                                        <label for="kategorija-vijesti"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"> Kategorija vijesti*</label>
                                                        <select class="form-control" name="kategorija" id="kategorija-vijesti" placeholder="Unesite kategoriju vijesti" value="{{ old('kategorija') }}" required>
                                                            @foreach($vijest_kategorija as $kategorija)
                                                                <option value="{{ $kategorija->id }}" {{ (old("kategorija") == $kategorija->id ? "selected":"") }}>{{ $kategorija->naziv }}</option>
                                                            @endforeach
                                                        </select>
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
                                                <textarea class="form-control" rows="20" id="sadrzaj" name="sadrzaj" value="{{ old('sadrzaj') }}"></textarea>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label for="tagovi-vijesti"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"> Tagovi vijesti</label>
                                                <input type="text" name="tagovi" id="tagovi-vijesti" class="form-control" placeholder="Unesite tagove vijesti" value="{{ old('tagovi') }}">
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
        <!-- Selectize for tags -->
        <script src="{{ asset('js/selectize.js') }}"></script>
        <script>
            $('#tagovi-vijesti').selectize({
                delimiter: ',',
                persist: false,
                create: function(input) {
                    return {
                        value: input,
                        text: input
                    }
                }
            });

            setTimeout(function() {
                $('#uspjesnoDodano').slideUp();
            }, 3000);

            function readURL(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('.slika-upload-klub').attr('src', e.target.result);
                        var image = new Image();
                        image.src = e.target.result;
                        image.onload = function () {

                            var height = this.height;
                            var width = this.width;
                            if (height < 720 || width < 980) {
                                $('.info-upload-slike').animate({
                                    'color': 'red'
                                });
                                return false;
                            }
                            $('.info-upload-slike').animate({
                                'color': 'green'
                            });
                            return false;
                        };
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#vijestSlika").change(function() {
                readURL(this);
            });
        </script>
    </div>
@endsection
