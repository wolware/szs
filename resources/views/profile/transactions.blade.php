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
            <h1 class="page-heading__title"><i class="fa fa-exchange fa-2x"></i></h1>
            <h1 class="page-heading__title">Historija transakcija</h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li class="registracija-podnaslov">SZS Krediti</li>
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
              <li class="content-filter__item "><a href="{{url('me/profile')}}" class="content-filter__link"><i class="fa fa-address-card-o"></i><small>Pregled</small>Profila</a></li>
              <li class="content-filter__item "><a href="{{url('me/profiles')}}" class="content-filter__link"><i class="fa fa-th-list"></i><small>Moji</small>Profili</a></li>
              <li class="content-filter__item "><a href="{{url('me/news')}}" class="content-filter__link"><i class="fa fa-plus-square-o"></i><small>Moje</small>Vijesti</a></li>
              <li class="content-filter__item "><a href="{{url('me/grades')}}" class="content-filter__link"><i class="fa fa-star-o"></i><small>Moje</small>Ocjene</a></li>
              <li class="content-filter__item "><a href="{{url('me/settings')}}" class="content-filter__link"><i class="fa fa-cogs"></i><small>Postavke</small>Profila</a></li>
            </ul>
          </div>
        </nav>
        <!-- Team Pages Filter / End -->

    <!-- Content
    ================================================== -->
      <div class="site-content">
      <div class="container">

        <div class="row">

          <div class="col-md-4">
			<!-- SZS Kredit -->

            <div class="card">
              <div class="card__header">
                <h4><i class="fa fa-database"></i> Status kredita</h4>
              </div>
              <div class="card__content text-center">
                <h2 class="profil-counter">750</h2>
                <p class="counter-info">Kredita</p>
              </div>
            </div>

            <!-- SZS Kredit kraj -->
            

            <a href="#" class="dopuni-kredit btn-social-counter" target="_blank">
              <div class="btn-social-counter__icon">
                <i class="fa fa-plus"></i>
              </div>
              <h6 class="btn-social-counter__title">Dopuni SZS kredit</h6>
            </a>

            <a href="#" class="iskoristi-kredit btn-social-counter" target="_blank">
              <div class="btn-social-counter__icon">
                <i class="fa fa-bolt"></i>
              </div>
              <h6 class="btn-social-counter__title">Iskoristiti kredit</h6>
            </a>

            <a href="#" class="kredit-info btn-social-counter" target="_blank">
              <div class="btn-social-counter__icon">
                <i class="fa fa-question-circle-o"></i>
              </div>
              <h6 class="btn-social-counter__title">Šta je SZS kredit</h6>
            </a>

			</div>
			
		  <div class="col-md-8"
			<div class="card">
            			
			<!-- Transakcije -->
            <div class="card card--has-table">
              <div class="card__header">
                <h4><i class="fa fa-history"></i> Evidencija transakcija</h4>
               </div>
              <div class="card__content">
                <div class="table-responsive">
                  <table class="table table--lg team-roster-table">
                    <thead>
                      <tr>
                        <th class="team-roster-table__number" width="40px"><i class="fa fa-refresh"></i></th>
                        <th class="team-roster-table__position" width="80px"><i class="fa fa-database"></i></th>
                        <th class="team-roster-table__name"><i class="fa fa-info-circle"></i> Opis</th>
                        <th class="team-roster-table__foot"><i class="fa fa-calendar-o"></i> Datum</th>
                        <th class="team-roster-table__age"><i class="fa fa-tag"></i> ID Transakcije</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="team-roster-table__number"><i class="fa fa-plus kredit-plus"></i></td>
                        <td class="team-roster-table__position">50</td>
                        <td class="team-roster-table__name">Dopuna SZS kredita putem SMS dopune (+38761012345)</td>
                        <td class="team-roster-table__foot">25.10.2017.</td>
                        <td class="team-roster-table__age"><a href="#">#456564</a></td>
                      </tr>
					  <tr>
                        <td class="team-roster-table__number"><i class="fa fa-minus kredit-minus"></i></td>
                        <td class="team-roster-table__position">45</td>
                        <td class="team-roster-table__name">Objava profila: Profil kluba <a href="#">FK Sve Za Sport</a></td>
                        <td class="team-roster-table__foot">27.09.2017.</td>
                        <td class="team-roster-table__age"><a href="#">#548890</a></td>
                      </tr>
					  <tr>
                        <td class="team-roster-table__number"><i class="fa fa-plus kredit-plus"></i></td>
                        <td class="team-roster-table__position">50</td>
                        <td class="team-roster-table__name">Dopuna SZS kredita putem SMS dopune (+38761012345)</td>
                        <td class="team-roster-table__foot">26.09.2017.</td>
                        <td class="team-roster-table__age"><a href="#">#456564</a></td>
                      </tr>
					  <tr>
                        <td class="team-roster-table__number"><i class="fa fa-minus kredit-minus"></i></td>
                        <td class="team-roster-table__position">45</td>
                        <td class="team-roster-table__name">Objava profila: Profil kluba <a href="#">FK Sve Za Sport</a></td>
                        <td class="team-roster-table__foot">05.09.2017.</td>
                        <td class="team-roster-table__age"><a href="#">#441144</a></td>
                      </tr>
					  <tr>
                        <td class="team-roster-table__number"><i class="fa fa-plus kredit-plus"></i></td>
                        <td class="team-roster-table__position">50</td>
                        <td class="team-roster-table__name">Dopuna SZS kredita putem SMS dopune (+38761012345)</td>
                        <td class="team-roster-table__foot">11.07.2017.</td>
                        <td class="team-roster-table__age"><a href="#">#885221</a></td>
                      </tr>
					  <tr>
                        <td class="team-roster-table__number"><i class="fa fa-minus kredit-minus"></i></td>
                        <td class="team-roster-table__position">45</td>
                        <td class="team-roster-table__name">Objava profila: Profil kluba <a href="#">FK Sve Za Sport</a></td>
                        <td class="team-roster-table__foot">10.07.2017.</td>
                        <td class="team-roster-table__age"><a href="#">#445213</a></td>
                      </tr>
					  <tr>
                        <td class="team-roster-table__number"><i class="fa fa-plus kredit-plus"></i></td>
                        <td class="team-roster-table__position">50</td>
                        <td class="team-roster-table__name">Dopuna SZS kredita putem SMS dopune (+38761012345)</td>
                        <td class="team-roster-table__foot">29.06.2017.</td>
                        <td class="team-roster-table__age"><a href="#">#778450</a></td>
                      </tr>
					  <tr>
                        <td class="team-roster-table__number"><i class="fa fa-minus kredit-minus"></i></td>
                        <td class="team-roster-table__position">45</td>
                        <td class="team-roster-table__name">Objava profila: Profil kluba <a href="#">FK Sve Za Sport</a></td>
                        <td class="team-roster-table__foot">27.06.2017.</td>
                        <td class="team-roster-table__age"><a href="#">#796546</a></td>
                      </tr>

                    </tbody>
                  </table>
                </div>
			  
			<!-- Navigacija -->
            <nav class="post-pagination text-center">
              <ul class="pagination pagination--condensed pagination--lg">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><span>...</span></li>
                <li><a href="#">16</a></li>
              </ul>
            </nav>
            <!-- Navigacija / End -->

              </div>
            </div>
            <!-- Transakcije / End -->

          </div>
        </div>
      </div>
    </div>
	
	


@endsection