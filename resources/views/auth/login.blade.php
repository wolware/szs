@extends('layouts.app')

@section('content')



  <div class="site-wrapper clearfix">
    <div class="site-overlay"></div>



    
   
    <!-- Page Heading
    ================================================== -->
    <div class="page-heading">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h1 class="page-heading__title"><i class="fa fa-user-o fa-2x"></i></h1>
            <h1 class="page-heading__title">Prijava korisnika</h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li class="registracija-podnaslov"><a href="index.html">Sve za sport</a></li>
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
          <div class="szs-login">
            <div class="card">
              <div class="card__header">
                <h4><i class="fa fa-unlock"></i> Forma za prijavu</h4>
              </div>
              <div class="card__content">
                <div class="row">
                  <div class="col-md-4 login-back">
                    <i class="fa fa-sign-in fa-5x"></i>
                  </div>
                  <div class="col-md-8">
                    <!-- Login Form -->
                <form role="form" action="{{ url('/login') }}" method="POST">
                  {!! csrf_field() !!}
                  <div class="form-group">
                    <label for="register-name"><i class="fa fa-user"></i> Korisničko ime</label>
                    <input type="text" name="name" id="register-name" class="form-control" placeholder="Unesite korisničko ime">
                  </div>
                  
                  <div class="form-group">
                    <label for="register-password"><i class="fa fa-lock"></i> Lozinka</label>
                    <input type="password" name="password" id="register-password" class="form-control" placeholder="Unesite lozinku">
                  </div>
                  
                  <div class="form-group form-group--submit">
                    <button type="submit" class="btn btn-default btn-lg btn-block btn-register btn-prijava">Prijava <i class="fa fa-chevron-right"></i> </button>
                  </div>

                  <!--<div class="form-group col-md-6">
                    <a href="#" class="btn-social-counter btn-social-counter--fb" target="_blank">
                      <div class="btn-social-counter__icon">
                        <i class="fa fa-facebook"></i>
                      </div>
                      <h6 class="btn-social-counter__title">Facebook prijava</h6>
                    </a>
                  </div>
                  <div class="form-group col-md-6">
                    <a href="#" class="btn-social-counter btn-social-counter--gplus" target="_blank">
                      <div class="btn-social-counter__icon">
                        <i class="fa fa-google"></i>
                      </div>
                      <h6 class="btn-social-counter__title">Google prijava</h6>
                    </a>
                  </div>-->
                </form>
              </div>



                <!-- Login Form / End -->
                <p class="reg-prijava">Ne posjedujem profil na SveZaSport, želim se <a href="/register">REGISTROVATI</a></p>
                  </div>
                </div>
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
