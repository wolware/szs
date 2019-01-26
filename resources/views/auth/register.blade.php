@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="{{asset('css/datepicker.css?t=424')}}"/>


    <div class="site-wrapper clearfix">
        <div class="site-overlay"></div>


        <!-- Page Heading
        ================================================== -->
        <div class="page-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h1 class="page-heading__title"><i class="fa fa-user-plus fa-2x"></i></h1>
                        <h1 class="page-heading__title">Registracija novog korisnika</h1>
                        <ol class="page-heading__breadcrumb breadcrumb">
                            <li class="registracija-podnaslov"><a href="{{url('/')}}">Sve za sport</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content
        ================================================== -->
        <div class="register-content">
            <div class="container">

                <div class="row">


                    <div class="col-md-12">

                        <!-- Register -->
                        <div class="card">
                            <div class="card__header">
                                <h4><i class="fa fa-pencil-square-o"></i> Forma za registraciju</h4>
                            </div>
                            <div class="card__content">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                            @endif
                            <!-- Register Form -->
                                <form id="registerForm" role="form" action="{{ url('/register') }}" method="POST">
                                    {!! csrf_field() !!}
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="register-name"><i class="fa fa-user"></i> Korisničko ime</label>
                                            <input type="text" name="name" id="register-name" minlength="3"
                                                   class="form-control" value="{{ old('name') }}"
                                                   placeholder="Unesite korisničko ime" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="register-email"><i class="fa fa-envelope-open-o"></i>
                                                Email</label>
                                            <input type="email" name="email" id="register-email" class="form-control"
                                                   placeholder="Unesite email" value="{{ old('email') }}" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="register-password"><i class="fa fa-lock"></i> Lozinka</label>
                                            <input type="password" name="password" id="password" minlength="6"
                                                   class="form-control" placeholder="Unesite lozinku" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="repeat-password"><i class="fa fa-repeat"></i> Ponovite
                                                lozinku</label>
                                            <input type="password" name="password_confirmation" minlength="6"
                                                   id="password_confirmation" class="form-control"
                                                   placeholder="Ponovite lozinku" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="pol"><i class="fa fa-venus-mars"></i> Spol:</label>
                                            <select class="form-control" name="spol" id="pol" required>
                                                @if (old('spol'))
                                                    <option selected>{{old('spol')}}</option>
                                                @else
                                                    <option disabled selected>Izaberite spol</option>
                                                @endif
                                                <option>Muško</option>
                                                <option>Žensko</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="date"><i class="fa fa-calendar-o"></i>
                                                Datum rođenja</label>
                                            <div class="input-group date form_date col-md-5" data-date=""
                                                 data-date-format="mm/dd/yy" data-link-field="dtp_input2"
                                                 data-link-format="mm/dd/yy">
                                                <input class="form-control" id="date" name="birth_date" size="16"
                                                       type="text" value="{{old('dob')}}" readonly>
                                                <span class="input-group-addon"><span
                                                            class="glyphicon glyphicon-remove"></span></span>
                                                <span class="input-group-addon"><span
                                                            class="glyphicon glyphicon-calendar"></span></span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="drzava"><i class="fa fa-globe"></i> Država:</label>
                                            <select class="form-control" name="country" id="drzava" required>
                                                <option disabled selected>Izaberite državu</option>
                                                @foreach($countries as $country)
                                                    <option value="{{ $country->id }}" {{ old('$country') === $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="checkbox checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox1" value="option1"
                                                       name="prihvatam" checked="{{old('prihvatam')}}" required>
                                                Prihvatam uvjete i slažem se sa odredbama...
                                                <span class="checkbox-indicator"></span>
                                            </label>
                                        </div>
                                        <div class="form-group form-group--submit">
                                            <button href="#" class="btn btn-default btn-lg btn-block btn-register"
                                                    type="submit" name="submit">Registracija <i
                                                        class="fa fa-chevron-right"></i></button>
                                        </div>
                                </form>
                                <!-- Register Form / End -->
                                <p class="reg-prijava">Već posjedujem profil na SveZaSport, želim se <a
                                            href="{{url('/login')}}">PRIJAVITI</a></p>
                            </div>
                        </div>
                        <!-- Register / End -->
                    </div>

                </div>
            </div>
        </div>

        <!-- Content / End -->


        <!-- Footer / End -->

    </div>
@endsection
