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
                        <h1 class="page-heading__title">Objekti</h1>
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
                        <label class="post-filter__label" for="type">Tip objekta</label>
                        <select id="type" name="type">
                            <option selected value="">Izaberite tip objekta</option>
                            @foreach($objectTypes as $type)
                                <option value="{{ $type->id }}" {{ app('request')->input('type') == $type->id ? 'selected' : '' }}>{{ $type->type }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="post-filter__select">
                        <label class="post-filter__label" for="province">Entitet/Pokrajina</label>
                        <select id="province" name="province">
                            <option selected value="">Izaberite entitet</option>
                            @foreach($regions as $region)
                                @if($region->region_type->type == 'Province')
                                    <option data-parent="{{ $region->region_parent }}" value="{{ $region->id }}" {{ app('request')->input('province') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="post-filter__select {{ app('request')->input('region') ? '' : 'search-input-disabled' }}">
                        <label class="post-filter__label" for="region">Kanton/Regija</label>
                        <select id="region" name="region" {{ app('request')->input('region') ? '' : 'disabled' }}>
                            <option selected value="">Izaberite kanton</option>
                            @foreach($regions as $region)
                                @if($region->region_type->type == 'Region')
                                    <option data-parent="{{ $region->region_parent }}" value="{{ $region->id }}" {{ app('request')->input('region') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="post-filter__select {{ app('request')->input('municipality') ? '' : 'search-input-disabled' }}">
                        <label class="post-filter__label" for="municipality">Općina</label>
                        <select id="municipality" name="municipality" {{ app('request')->input('municipality') ? '' : 'disabled' }}>
                            <option selected value="">Izaberite općinu</option>
                            @foreach($regions as $region)
                                @if($region->region_type->type == 'Municipality')
                                    <option data-parent="{{ $region->region_parent }}" value="{{ $region->id }}" {{ app('request')->input('municipality') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="post-filter__select">
                        <label class="post-filter__label" for="sort">Sortiraj po</label>
                        <select name="sort" id="sort">
                            <option value="name_desc" {{ app('request')->input('sort') == 'name_desc' || !app('request')->input('sort') ? 'selected' : '' }}>Abecedi silazno</option>
                            <option value="name_asc" {{ app('request')->input('sort') == 'name_asc' ? 'selected' : '' }}>Abecedi uzlazno</option>
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
                                        <a href="{{url('/objects/' . $result->id)}}"><img class="logo-club-tab-index" src="{{ asset('images/object_avatars/' . $result->image)}}" alt=""></a>
                                    </figure>
                                    <div class="posts__inner card__content">
                                        <h6 class="posts__title ime-sportiste-klub-lista"><a href="{{url('/objects/' . $result->id)}}">{{$result->name}}</a></h6>
                                        <div class="posts__excerpt">{{$result->city}}</div>
                                    </div>
                                    <footer class="posts__footer card__footer">
                                        <a href="{{url('/objects/' . $result->id)}}" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila objekta</a>
                                    </footer>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="text-center">Objekti sa definisanim parametrima ne postoje.</p>
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