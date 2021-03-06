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
                        <h1 class="page-heading__title"><i class="fa fa-cogs fa-2x"></i></h1>
                        <h1 class="page-heading__title">Postavke profila</h1>
                        <ol class="page-heading__breadcrumb breadcrumb">
                            <li class="registracija-podnaslov">Sve Za Sport</li>
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
                    <li class="content-filter__item "><a href="{{url('me/profile')}}" class="content-filter__link"><i
                                    class="fa fa-address-card-o"></i>
                            <small>Pregled</small>
                            Profila</a></li>
                    <li class="content-filter__item "><a href="{{url('me/profiles')}}" class="content-filter__link"><i
                                    class="fa fa-th-list"></i>
                            <small>Moji</small>
                            Profili</a></li>
                    <li class="content-filter__item "><a href="{{url('me/news')}}" class="content-filter__link"><i
                                    class="fa fa-plus-square-o"></i>
                            <small>Moje</small>
                            Vijesti</a></li>
                    <!--<li class="content-filter__item"><a href="{{url('me/grades')}}" class="content-filter__link"><i
                                    class="fa fa-star-o"></i>
                            <small>Moje</small>
                            Ocjene</a></li>-->
                    <li class="content-filter__item content-filter__item--active"><a href="{{url('me/settings')}}"
                                                                                     class="content-filter__link"><i
                                    class="fa fa-cogs"></i>
                            <small>Postavke</small>
                            Profila</a></li>
                </ul>
            </div>
        </nav>
        <!-- Team Pages Filter / End -->

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
                <form id="settingsUpdateUser" role="form" action="{{ url('/me/settings/update') }}" method="POST"
                      enctype="multipart/form-data">
                    <div class="row postavke-red">

                        <!-- Osnovne informacije -->
                        <div class="card">
                            <div class="card__content postavke-start-col">

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="alc-staff__photo">
                                            <img id="userAvatar" class="slika-edit-profil"
                                                 src="{{ isset($data->avatar) ? asset('images/avatars/'.$data->avatar) : asset('images/default_avatar.png')}}"
                                                 alt="">
                                        </div>
                                    </div>

                                    <div class="col-md-4 sadrzaj-slike">

                                        <p class="dodaj-sliku-naslov">Slika profila</p>
                                        <p class="dodaj-sliku-call">Vaš identitet</p>
                                        <label class="btn btn-default btn-xs btn-file dodaj-sliku-button">
                                            Odaberi sliku... <input type="file" id="avatar" name="avatar"
                                                                    style="display: none;"
                                                                    onchange="previewFile('#avatar','#userAvatar', 700, 700, 64, 64)">
                                        </label>
                                        <div class="info001">
                                            <p class="info-upload-slike">Preporučene dimenzije za vašu sliku:</p>
                                            <p class="info-upload-slike">Minimalno: 64x64 px</p>
                                        </div>
                                    </div>
                                    <div class="col-md-5 osnovna-polja">
                                        <div class="form-group col-md-12">
                                            <label for="register-name"><i class="fa fa-user"></i> Korisničko ime</label>
                                            <input type="text" name="name" id="register-name" class="form-control"
                                                   placeholder="{{$data->name}}" value="{{$data->name}}" disabled>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="register-email"><i class="fa fa-envelope-open-o"></i>
                                                Email</label>
                                            <input type="email" name="email" id="register-email" class="form-control"
                                                   placeholder="{{$data->email}}" value="{{$data->email}}" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Osnovne informacije kraj -->

                        </div>

                    </div>
                    <div class="row postavke-red">
                        <!-- Register -->
                        <div class="card">
                            <div class="card__content postavke-content">

                                <!-- Register Form -->

                                {!! csrf_field() !!}
                                <div class="form-group col-md-6">
                                    <label for="register-password"><i class="fa fa-lock"></i> Nova lozinka</label>
                                    <input type="password" name="password" id="register-password" minlength="6"
                                           class="form-control" placeholder="Unesite lozinku">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="repeat-password"><i class="fa fa-repeat"></i> Ponovite novu
                                        lozinku</label>
                                    <input type="password" name="password_confirmation" minlength="6"
                                           id="repeat-password" class="form-control" placeholder="Ponovite lozinku">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="pol"><i class="fa fa-venus-mars"></i> Spol:</label>
                                    <select class="form-control" name="spol" id="pol" required>
                                        <option value="Žensko" {{ $data->spol == 'Žensko' ? 'selected' : '' }}>Žensko
                                        </option>
                                        <option value="Muško" {{ $data->spol == 'Muško' ? 'selected' : '' }}>Muško
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 input-group date form_date" data-date="{{ \Carbon\Carbon::parse($data->dob)->format('m/d/Y')  }}"
                                     data-date-format="mm/dd/yy" data-link-field="dtp_input2"
                                     data-link-format="mm/dd/yy">
                                    <label class="control-label" for="date"><i class="fa fa-calendar-o"></i> Datum
                                        rođenja</label>
                                    <input class="form-control" id="date" name="dob" placeholder="Unesite datum rođenja"
                                           value="{{ \Carbon\Carbon::parse($data->dob)->format('m/d/Y')  }}" type="text" required readonly=""/>
                                    <span class="input-group-addon" style="display: inline;"><span
                                                class="glyphicon glyphicon-remove"></span></span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="drzava"><i class="fa fa-globe"></i> Država:</label>
                                    <select class="form-control" name="country" id="drzava" required>
                                        @foreach($countries as $country)
                                            <option value="{{ $country->id }}" {{ $data->$country == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="account-address-1"><i class="fa fa-map-marker"></i> Adresa
                                        stanovanja</label>
                                    <input type="text" class="form-control" name="address" onclick="adresaAutoComp()"
                                           id="adresa" placeholder="Unesite adresu stanovanja" value="{{$data->address}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="telefon-1"><i class="fa fa-phone-square"></i> Kontakt telefon</label>
                                    <input type="text" class="form-control" name="phone" id="telefon-1"
                                           placeholder="Unesite broj telefona" value="{{$data->phone}}">
                                </div>
                                <div class="form-group form-group--submit">
                                    <button type="submit"
                                            class="btn btn-default btn-lg btn-block btn-register"><i
                                                class="fa fa-floppy-o"></i> Spasi izmjene
                                    </button>
                                </div>
                                <!-- Register Form / End -->
                            </div>
                        </div>
                        <!-- Register / End -->
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection