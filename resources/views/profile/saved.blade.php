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
            <h1 class="page-heading__title"><i class="fa fa-bookmark-o fa-2x"></i></h1>
            <h1 class="page-heading__title">Spašeni profili</h1>
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
              <li class="content-filter__item "><a href="{{url('me/profile')}}" class="content-filter__link"><i class="fa fa-address-card-o"></i><small>Pregled</small>Profila</a></li>
              <li class="content-filter__item "><a href="{{url('me/profiles')}}" class="content-filter__link"><i class="fa fa-th-list"></i><small>Moji</small>Profili</a></li>
              <li class="content-filter__item content-filter__item--active"><a href="{{url('me/saved')}}" class="content-filter__link"><i class="fa fa-bookmark-o"></i><small>Spašeni</small>Profili</a></li>
              <li class="content-filter__item "><a href="{{url('me/medals')}}" class="content-filter__link"><i class="fa fa-trophy"></i><small>Moje</small>Medalje</a></li>
              <li class="content-filter__item "><a href="{{url('me/news')}}" class="content-filter__link"><i class="fa fa-plus-square-o"></i><small>Moje</small>Vijesti</a></li>
              <li class="content-filter__item "><a href="{{url('me/grades')}}" class="content-filter__link"><i class="fa fa-star-o"></i><small>Moje</small>Ocjene</a></li>
              <li class="content-filter__item "><a href="{{url('me/transactions')}}" class="content-filter__link"><i class="fa fa-exchange"></i><small>Historija</small>Transakcija</a></li>
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
			<!-- SZS Ocjene status -->

            <div class="card">
              <div class="card__header">
                <h4><i class="fa fa-star"></i> Status spašenih profila</h4>
              </div>
              <div class="card__content text-center">
                <h2 class="profil-counter">150</h2>
                <p class="counter-info">Spašenih profila</p>
              </div>
            </div>

            <!-- SZS Ocjene status kraj -->
			
			</div>
			
		<div class="col-md-8">
		<div class="card">
          <div class="card__header">
            <h4><i class="fa fa-bars"></i> Lista spašenih profila</h4>
          </div>
          <div class="card__content kartica-ev-ocjene">

            <div class="table-responsive">
              <table class="table shop-table">
                <thead>
                  <tr>
                    <th class="product__photo">Slika</th>
                    <th class="product__info">Naziv/Ime</th>
                    <th class="product__remove">Ukloni</th>
                  </tr>
                </thead>
                <tbody>
				  <tr>
                    <td class="product__photo">
                      <figure class="product__thumb" width="10%">
						<a href="#"><img class="img-ocjene" src="{{asset('images/promo240429713.jpg')}}" alt=""></a>
                      </figure>
                    </td>
                    <td class="product__info" width="60%">
                      <span class="product__cat">Teretana</span>
                      <h5 class="product__name"><a href="#">SZS Royal Fitness Center</a></h5>
                    </td>
                    <td class="product__remove" width="10%">
                      <a href="#" class="fa fa-times product__remove-icon"></a>
                    </td>
                  </tr>
				  <tr>
                    <td class="product__photo">
                      <figure class="product__thumb" width="10%">
						<a href="#"><img class="img-ocjene" src="{{asset('images/promo240429713.jpg')}}" alt=""></a>
                      </figure>
                    </td>
                    <td class="product__info" width="60%">
                      <span class="product__cat">Teretana</span>
                      <h5 class="product__name"><a href="#">SZS Royal Fitness Center</a></h5>
                    </td>
                    <td class="product__remove" width="10%">
                      <a href="#" class="fa fa-times product__remove-icon"></a>
                    </td>
                  </tr><tr>
                    <td class="product__photo">
                      <figure class="product__thumb" width="10%">
						<a href="#"><img class="img-ocjene" src="{{asset('images/promo240429713.jpg')}}" alt=""></a>
                      </figure>
                    </td>
                    <td class="product__info" width="60%">
                      <span class="product__cat">Teretana</span>
                      <h5 class="product__name"><a href="#">SZS Royal Fitness Center</a></h5>
                    </td>
                    <td class="product__remove" width="10%">
                      <a href="#" class="fa fa-times product__remove-icon"></a>
                    </td>
                  </tr><tr>
                    <td class="product__photo">
                      <figure class="product__thumb" width="10%">
						<a href="#"><img class="img-ocjene" src="{{asset('images/promo240429713.jpg')}}" alt=""></a>
                      </figure>
                    </td>
                    <td class="product__info" width="60%">
                      <span class="product__cat">Teretana</span>
                      <h5 class="product__name"><a href="#">SZS Royal Fitness Center</a></h5>
                    </td>
                    <td class="product__remove" width="10%">
                      <a href="#" class="fa fa-times product__remove-icon"></a>
                    </td>
                  </tr><tr>
                    <td class="product__photo">
                      <figure class="product__thumb" width="10%">
						<a href="#"><img class="img-ocjene" src="{{asset('images/promo240429713.jpg')}}" alt=""></a>
                      </figure>
                    </td>
                    <td class="product__info" width="60%">
                      <span class="product__cat">Teretana</span>
                      <h5 class="product__name"><a href="#">SZS Royal Fitness Center</a></h5>
                    </td>
                    <td class="product__remove" width="10%">
                      <a href="#" class="fa fa-times product__remove-icon"></a>
                    </td>
                  </tr><tr>
                    <td class="product__photo">
                      <figure class="product__thumb" width="10%">
						<a href="#"><img class="img-ocjene" src="{{asset('images/promo240429713.jpg')}}" alt=""></a>
                      </figure>
                    </td>
                    <td class="product__info" width="60%">
                      <span class="product__cat">Teretana</span>
                      <h5 class="product__name"><a href="#">SZS Royal Fitness Center</a></h5>
                    </td>
                    <td class="product__remove" width="10%">
                      <a href="#" class="fa fa-times product__remove-icon"></a>
                    </td>
                  </tr><tr>
                    <td class="product__photo">
                      <figure class="product__thumb" width="10%">
						<a href="#"><img class="img-ocjene" src="{{asset('images/promo240429713.jpg')}}" alt=""></a>
                      </figure>
                    </td>
                    <td class="product__info" width="60%">
                      <span class="product__cat">Teretana</span>
                      <h5 class="product__name"><a href="#">SZS Royal Fitness Center</a></h5>
                    </td>
                    <td class="product__remove" width="10%">
                      <a href="#" class="fa fa-times product__remove-icon"></a>
                    </td>
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
		</div>
	   </div>
	  </div>
	</div>


@endsection