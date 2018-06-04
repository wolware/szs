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
					  <h1 class="page-icon-objavi-title"><img src="{{ asset('images/icons/add-new-main.png') }}"></h1>
					  <h1 class="page-heading__title">Objavi sportski objekt</h1>
					  <ol class="page-heading__breadcrumb breadcrumb">
						  <li class="registracija-podnaslov">Izaberi sport</li>
					  </ol>
				  </div>
			  </div>
		  </div>
	  </div>

	<!-- Team Pages Filter -->
	  <nav class="content-filter">
		  <div class="container">
			  <ul class="content-filter__list">
				  <li class="content-filter__item content-filter__item--active"><a class="content-filter__link"><i class="fa fa-th-list"></i><small>Izbor</small>Profila</a></li>
				  <p class="info-bar-objavi"><i class="fa fa-info-circle"></i> Objavite Vaš profil i doprinesite razvoju sporta u Bosni i Hercegovini. Budite i Vi dio najveće sportske priče. </p>
			  </ul>
		  </div>
	  </nav>
        <!-- Team Pages Filter / End -->

    <!-- Content
    ================================================== -->
      <div class="site-content">
		  <div class="container">
			<div class="row igraci-grid">
				@foreach($object_types as $object_type)
					<div class="post-grid__item col-sm-3">
						<div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
							<figure class="posts__thumb">
								<a href="{{ url('objects/' . $object_type->id . '/new') }}">
									<img src="{{ asset('images/objekti/' . $object_type->image ) }}" alt="">
								</a>
							</figure>
							<div class="posts__inner card__content">
								<div class="row">
									<div class="col-md-9">
										<h6 class="posts__title ime-sportiste-klub-lista"><a href="{{ url('objects/' . $object_type->id . '/new') }}">{{ $object_type->type }}</a></h6>
										<span>{{ $object_type->description }}</span>
									</div>
									<div class="col-md-3">
										<a href="{{ url('objects/' . $object_type->id . '/new') }}" class="posts__title ime-sportiste-klub-lista flatter"> <i class="fa fa-plus-circle"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		  </div>
	  </div>


@endsection