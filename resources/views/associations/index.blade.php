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
            <h1 class="page-icon-objavi-title"><img src="{{asset('images/klubovi-fff.png')}}"></h1>
            <h1 class="page-heading__title">Savezi</h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li class="registracija-podnaslov">U Bosni i Hercegovini</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
	
		 <!-- Post Filter -->
			<div class="post-filter">
			  <div class="container">
				<form role="form" method="GET" class="post-filter__form clearfix forma-filteri">
					<div class="post-filter__select">
						<label class="post-filter__label" for="sport_type">Tip sporta</label>
						<select id="sport_type" name="sport_type">
							<option value="" {{ app('request')->input('sport_type') == '' ? 'selected' : '' }}>Izaberite tip kluba</option>
							<option value="1" {{ app('request')->input('sport_type') == '1' ? 'selected' : '' }}>Sportski klub</option>
							<option value="2" {{ app('request')->input('sport_type') == '2' ? 'selected' : '' }}>Invalidski sportski klub</option>
						</select>
					</div>
					<div class="post-filter__select {{ app('request')->input('sport') ? '' : 'search-input-disabled' }}">
						<label class="post-filter__label" for="sport">Sport</label>
						<select id="sport" name="sport" {{ app('request')->input('sport') ? '' : 'disabled' }}>
							<option selected value="">Izaberite sport</option>
							@foreach($sports as $sport)
								<option data-disabled="{{ $sport->with_disabilities }}" value="{{ $sport->id }}" {{ app('request')->input('sport') == $sport->id ? 'selected' : '' }}>{{ $sport->name }}</option>
							@endforeach
						</select>
					</div>
					<div class="post-filter__select">
						<label class="post-filter__label" for="sort">Sortiraj po</label>
						<select name="sort" id="sort">
							<option value="name_desc" {{ app('request')->input('sort') == 'name_desc' || !app('request')->input('sort') ? 'selected' : '' }}>Abecedi silazno</option>
							<option value="name_asc" {{ app('request')->input('sort') == 'name_asc' ? 'selected' : '' }}>Abecedi uzlazno</option>
							<option value="sport" {{ app('request')->input('sort') == 'sport' ? 'selected' : '' }}>Sport</option>
						</select>
					</div>
					<div class="post-filter__submit pull-right">
						<button type="submit" class="btn btn-default btn-lg btn-block">Osvježi pretragu</button>
					</div>
				</form>
			  </div>
			</div>
		<!-- Post Filter / End -->

    <!-- Content
    ================================================== -->
    <div class="site-content">
		<div class="container">

			<div class="row">
				@if($results->total() > 0)
					@foreach($results as $result)
						<div class="post-grid__item col-md-3">
							<div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
								<figure class="posts__thumb club-thumb-backgr">
									<a href="{{url('/associations/' . $result->id)}}"><img class="logo-club-tab-index" src="{{ asset('images/association_logo/' . $result->image)}}" alt=""></a>
								</figure>
								<div class="posts__inner card__content">
									<h6 class="posts__title ime-sportiste-klub-lista"><a href="{{url('/associations/' . $result->id)}}">{{$result->name}}</a></h6>
									<div class="posts__excerpt">{{$result->sport->name}}</div>
								</div>
								<footer class="posts__footer card__footer">
									<a href="{{url('/associations/' . $result->id)}}" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila saveza</a>
								</footer>
							</div>
						</div>
					@endforeach
				@else
					<p class="text-center">Savezi sa definisanim parametrima ne postoje.</p>
				@endif
			</div>



			<!-- Pagination -->
			<div class="row">
				<div class="col-md-12 text-center">
					{{ $results->appends($_GET)->links() }}
				</div>
			</div>
			<!-- Pagination / End -->
					
						
		</div>
	 </div>
    <!-- Content / End -->
  </div>


@endsection