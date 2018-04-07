@extends('layouts.app')

@section('content')
<div class="site-wrapper clearfix">
    <div class="site-overlay"></div>


<!-- Header
    ================================================== -->
    <!-- Header / End -->
    
    <!-- Pushy Panel - Dark -->
    <aside class="pushy-panel pushy-panel--dark">
      <div class="pushy-panel__inner">
        <header class="pushy-panel__header">
          <div class="pushy-panel__logo">
            <a href="index.php"><img src="{{asset('assets/images/soccer/logo.png')}}" srcset="assets/images/soccer/logo@2x.png 2x" alt="Alchemists"></a>
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
            <h1 class="page-icon-objavi-title"><img src="{{asset('assets/images/icons/stadium0.svg')}}"></img></h1>
            <h1 class="page-heading__title">Objavi Objekt</h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li class="registracija-podnaslov">Kuglana</li>
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
            <li role="presentation" class="active"><a href="#tab-opcenito" role="tab" data-toggle="tab"><i class="fa fa-info-circle"></i><small>O objektu</small>Općenito</a></li>
      <li role="presentation" class="preslic"><a href="#tab-predispozicije" role="tab" data-toggle="tab"><i class="fa fa-bolt"></i><small>Karakteristike</small>Objekta</a></li>
            <li role="presentation"><a href="#tab-biografija" role="tab" data-toggle="tab"><i class="fa fa-history"></i><small>Vremeplov</small>Objekta</a></li>
      <li role="presentation"><a href="#tab-galerija" role="tab" data-toggle="tab"><i class="fa fa-picture-o"></i><small>Foto</small>Galerija</a></li>
          </ul>

         
          <!-- Tab panes -->
          <div class="tab-content card__content">
    
            
      <!-- Tab: Općenito -->
            <div role="tabpanel" class="tab-pane fade in active" id="tab-opcenito">
      <div class="row">
        <form id="createNewDvorana" role="form" action="{{ url('/objects/kuglana/create') }}" method="POST" enctype="multipart/form-data" >
        {!! csrf_field() !!}        
        <div class="row identitet-style">
        
         <div class="col-md-6 objavi-klub-logo-setup">
         
            <div class="col-md-7">
          
                      <div class="alc-staff__photo">
                        <img class="slika-upload-klub" id="slika_upload_klub" src="{{asset('images/dino-secic.jpg')}}" alt="">
                      </div>
                   
            </div>
          
                    <div class="col-md-5 sadrzaj-slike">
            
              <p class="dodaj-sliku-naslov klub-a1">Slika profila</p>
              <p class="dodaj-sliku-call">Vaš identitet</p>
              <label class="btn btn-default btn-xs btn-file dodaj-sliku-button">
              Odaberi sliku... <input type="file" id="slikaprof" name="profilna" style="display: none;" required accept="image/*" onchange="previewFile('slikaprof','slika_upload_klub')">
              </label>
              <div class="info001">
              <p class="info-upload-slike">Preporučene dimenzije za sliku:</p>
              <p class="info-upload-slike">Minimalno: 1920x1080 px</p>
              </div>
              
          </div>
         </div>
         
         <div class="col-md-6">
         
          <div class="form-group col-md-12">
                    <label for="ime-kluba"><img class="flow-icons-013" src="{{asset('assets/images/icons/edit.svg')}}"></img> Naziv objekta</label>
                    <input type="text" name="naziv" id="ime-sportiste" class="form-control" placeholder="Unesite puni naziv objekta">
                  </div>
          
         </div>
         
        </div>
        
        
    <div class="row form-segment">
          <header class="card__header">
          <h4><i class="fa fa-location-arrow"></i> Navigacija</h4>
          </header>
         </div>
        
          <div class="form-group col-md-4">
                    <label for="kontinent"><img class="flow-icons-013" src="{{asset('images/icons/international-delivery.svg')}}"></img> Kontinent</label>
                    <select class="form-control" id="kontinent" name="kontinent" required>
              <option value="eu" selected>Evropa</option>
            </select>
          </div>
        
          <div class="form-group col-md-4">
                    <label for="drzava"><img class="flow-icons-013" src="{{asset('images/icons/earth.svg')}}"></img> Država</label>
                    <select class="form-control" id="drzava" name="drzava" required>
              <option value="bih" selected>Bosna i Hercegovina</option>
            </select>
          </div>
        
          <div class="form-group col-md-4" >
                    <label for="entitet"><img class="flow-icons-013" src="{{asset('images/icons/map.svg')}}"></img> Entitet/Distrikt</label>
                    <select class="form-control" id="entitet" name="entitet" required>
              <option value="" disabled selected>Izaberite entitet/distrikt</option>
            <option value="Federacija BiH">Federacija BiH</option>
              <option value="Republika Srpska">Republika Srpska</option>
            <option value="distrikt" disabled>Distrikt Brčko</option>
            </select>
          </div>
        
          <div class="form-group col-md-4" id="kantonDiv">
                    <label for="kanton"><img class="flow-icons-013" src="{{asset('images/icons/placeholder.svg')}}"></img> Kanton</label>
                    <select class="form-control" id="kanton" name="kanton">
              <option value="" disabled selected>Izaberite kanton</option>
            <option value="usk" disabled>Unsko-sanski Kanton</option>
              <option value="pk" disabled>Posavski Kanton</option>
            <option value="tk" disabled>Tuzlanski Kanton</option>
              <option value="zdk" disabled>Zeničko-dobojski Kanton</option>
            <option value="bpk" disabled>Bosansko-podrinjski Kanton</option>
              <option value="sbk" disabled>Srednjobosanski Kanton</option>
            <option value="hnk" disabled>Hercegovačko-neretvanski Kanton</option>
              <option value="zhk" disabled>Zapadnohercegovački Kanton</option>
            <option value="ks">Kanton Sarajevo</option>
              <option value="k10" disabled>Kanton 10</option>
            </select>
          </div>
          
          <div class="form-group col-md-4" id="opcineDiv">
                    <label for="opcine-ks"><img class="flow-icons-013" src="{{asset('images/icons/opcina.svg')}}"></img> Općine Kantona Sarajevo</label>
                    <select class="form-control" id="opcine-ks" name="opcina">
              <option value="" disabled selected>Izaberite općinu</option>
            <option value="hadzici">Hadžići</option>
              <option value="ilidza">Ilidža</option>
            <option value="ilijas">Ilijaš</option>
              <option value="centar">Centar</option>
            <option value="novi-grad">Novi Grad</option>
              <option value="novo-sarajevo">Novo Sarajevo</option>
            <option value="stari-grad">Stari Grad</option>
              <option value="trnovo">Trnovo</option>
            <option value="vogosca">Vogošća</option>
            </select>
          </div>
          
          <div class="form-group col-md-4" id="regijaDiv" style="display:none;">
                    <label for="regija"><img class="flow-icons-013" src="{{asset('images/icons/placeholder.svg')}}"></img> Regija</label>
                    <select class="form-control" id="regija" name="kantonSrb">
              <option value="" disabled selected>Izaberite regiju</option>
            <option value="blk" disabled>Banjalučka</option>
              <option value="dbj" disabled>Dobojsko-bijeljinska</option>
            <option value="szv">Sarajevsko-zvornička</option>
              <option value="tbf"disabled>Trebinjsko-fočanska</option>
            </select>
          </div>
          
          <div class="form-group col-md-4" id="opSrb" style="display:none;">
                    <label for="opcine-sz-reg"><img class="flow-icons-013" src="{{asset('images/icons/opcina.svg')}}"></img> Općine Sarajevsko-Zvorničke regije</label>
                    <select class="form-control" id="opcine-sz-reg" name="opcinaSrb">
              <option value="" disabled selected>Izaberite općinu</option>
            <option value="bratunac" disabled>Bratunac</option>
              <option value="hanpijesak" disabled>Han Pijesak</option>
            <option value="ilijas2">Ilijaš</option>
              <option value="istocni-stari-grad">Istočni Stari Grad</option>
            <option value="kasindo">Kasindo</option>
              <option value="kladanj" disabled>Kladanj</option>
            <option value="lukavica" disabled>Lukavica</option>
              <option value="milici" disabled>Milići</option>
            <option value="olovo" disabled>Olovo</option>
            <option value="osmaci" disabled>Osmaci</option>
              <option value="pale">Pale</option>
            <option value="rogatica" disabled>Rogatica</option>
              <option value="rudo" disabled>Rudo</option>
            <option value="sa-novi-grad">Sarajevo Novi Grad</option>
              <option value="sokolac" disabled>Sokolac</option>
            <option value="srebrenica" disabled>Srebrenica</option>
              <option value="trnovo2">Trnovo</option>
            <option value="ustipraca">Ustiprača</option>
            <option value="visegrad" disabled>Višegrad</option>
            <option value="vlasenica" disabled>Vlasenica</option>
            <option value="zvornik" disabled>Zvornik</option>
            <option value="sekovici" disabled>Šekovići</option>
            <option value="zepa" disabled>Žepa</option>
            </select>
          </div>
          
          <div class="form-group col-md-4">
                    <label for="mjesto"><img class="flow-icons-013" src="{{asset('images/icons/small-calendar.svg')}}"></img> Mjesto/Grad kluba</label>
                    <input type="text" name="grad" id="mjesto" onFocus="initAutocomplete()" class="form-control" placeholder="Unesite mjesto kluba" required>
                  </div>
        
      </div>
          
      
      
      <div class="row form-objavi-klub-01">
              <header class="card__header">
                <h4><i class="fa fa-share-alt"></i> Socijalne mreže</h4>
              </header>
       </div>
       <div class="row">
        
          <div class="form-group col-md-6">
            <label for="fcb"><img class="flow-icons-013" src="{{asset('images/icons/facebook.svg')}}"></img> Facebook stranica</label>
            <input type="text" name="fb" id="fcb" class="form-control" placeholder="Unesite link službene facebook stranice">
          </div>
          
        <!--  <div class="form-group col-md-6">
            <label for="twt"><img class="flow-icons-013" src="{{asset('images/icons/twitter.svg"')}}></img> Twitter profil</label>
            <input type="text" name="twt" id="twt" class="form-control" placeholder="Unesite link službenog twitter profila">
          </div> -->
          
          <div class="form-group col-md-6">
            <label for="inst"><img class="flow-icons-013" src="{{asset('images/icons/instagram.svg')}}"></img> Instagram profil</label>
            <input type="text" name="instagram" id="inst" class="form-control" placeholder="Unesite link službenog instagram profila">
          </div>
          
          <div class="form-group col-md-6">
            <label for="yt"><img class="flow-icons-013" src="{{asset('images/icons/youtube.svg')}}"></img> YouTUBE pofil</label>
            <input type="text" name="youtube" id="yt" class="form-control" placeholder="Unesite link službenog YouTUBE kanala">
          </div>
          
      </div>
      
      <div class="row form-objavi-klub-01">
              <header class="card__header">
                <h4><i class="fa fa-youtube-play"></i> Google Map</h4>
              </header>
       </div>
       <div class="row">
        
          <div class="form-group col-md-12">
            <label for="embedmap"><img class="flow-icons-013" src="{{asset('assets/images/icons/code.svg')}}"></img> Ugradbeni kod sa Google Maps (<a href="kako-do-koda.php">kako do koda</a>?)</label>
            <input type="text" name="google_map" id="embedmap" class="form-control" placeholder="Unesite ugradbeni kod sa Google Maps">
          </div>
          
        
        <div class="col-md-6">
                </div>
        <div class="form-group form-group--submit col-md-6" >
                    <a href="#" class="btn btn-default btn-sm btn-block prvi_korak_end_obj">Sljedeći korak <i class="fa fa-chevron-right"></i></a>
                </div>
        
      </div>
      
            </div>
            <!-- Tab: Općenito / End -->
      
      <!-- Tab: Predispozicije -->
      
      <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-predispozicije">
      
      <div class="row form-objavi-klub-01">
        <header class="card__header">
                <h4><i class="fa fa-info-circle"></i> Osnovne informacije</h4>
              </header>
       </div>
      <div class="row"> 
          <div class="form-group col-md-4">
              <label class="control-label" for="date-otvor"><i class="fa fa-calendar-o"></i> Datum otvorenja</label>
              <input class="form-control" id="date-otvor" name="datum_otvaranja" placeholder="Izaberite datum otvorenja" type="text"/>
              </div>
          
          <div class="form-group col-md-4">
                    <label for="tereni"><img class="flow-icons-013" src="{{asset('assets/images/icons/field.svg')}}"></img> Broj staza</label>
                    <input type="text" name="broj_staza" id="tereni" min="1" class="form-control" placeholder="Unesite broj staza">
                  </div>
          
          <div class="form-group col-md-4">
                    <label for="kapacitet"><img class="flow-icons-013" src="{{asset('assets/images/icons/gledaoci.svg')}}"></img> Broj kugli</label>
                    <input type="number" name="broj_kugli" id="kapacitet" min="1" class="form-control" placeholder="Unesite broj kugli">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="kapacitet"><img class="flow-icons-013" src="{{asset('assets/images/icons/gledaoci.svg')}}"></img> Površina objekta (m2)</label>
                    <input type="number" name="povrsina_objekta" id="kapacitet" min="1" class="form-control" placeholder="Unesite povrsinu objekta">
                  </div>
          <div class="form-group col-md-4">
                    <label for="kapacitet"><img class="flow-icons-013" src="{{asset('assets/images/icons/gledaoci.svg')}}"></img> Kapacitet korisnika</label>
                    <input type="number" name="kapacitet_objekta" id="kapacitet" min="1" class="form-control" placeholder="Unesite kapacitet objekta">
                  </div>
          
      </div>
        
      <div class="row form-objavi-klub-01">
              <header class="card__header">
                <h4><i class="fa fa-info-circle"></i> Osobine objekta</h4>
              </header>
       </div>
       <div class="row">
          
          <div class="form-group col-md-4">
            <label for="wifi"><img class="flow-icons-013" src="{{asset('assets/images/icons/wifi.svg')}}"></img> Wi-Fi</label>
            <select class="form-control" id="wifi" name="wifi">
              <option value="" disabled>Pristup internetu</option>
              <option value="Besplatan">Besplatan</option>
              <option value="Uz naplatu">Uz naplatu</option>
              <option value="Nema">Nema</option>
            </select>
          </div>
          
          <div class="form-group col-md-4">
            <label for="parking"><img class="flow-icons-013" src="{{asset('assets/images/icons/parking-sign.svg')}}"></img> Parking</label>
            <select class="form-control" id="parking" name="parking">
              <option value="" disabled>Odaberite opciju parking zone</option>
              <option value="Besplatan">Besplatan</option>
              <option value="Uz naplatu">Uz naplatu</option>
              <option value="Nema">Nema</option>
            </select>
          </div>
          
          <div class="form-group col-md-4">
            <label for="restoran"><img class="flow-icons-013" src="{{asset('assets/images/icons/cutlery.svg')}}"></img> Restoran</label>
            <select class="form-control" id="restoran" name="restoran">
              <option value="" disabled>Lokacija restorana</option>
              <option value="U sklopu objekta">U sklopu objekta</option>
              <option value="U blizini objekta">U blizini objekta</option>
              <option value="Nema">Nema</option>
            </select>
          </div>
          
          <div class="form-group col-md-4">
            <label for="kafeterija"><img class="flow-icons-013" src="{{asset('assets/images/icons/coffee-cup.svg')}}"></img> Kafeterija</label>
            <select class="form-control" id="kafeterija">
              <option value="" disabled selected>Lokacija kafeterije</option>
              <option value="">U sklopu objekta</option>
              <option value="">U blizini objekta</option>
              <option value="">Nema</option>
            </select>
          </div>
          
          <div class="form-group col-md-4">
            <label for="pzosi"><img class="flow-icons-013" src="{{asset('assets/images/icons/accessibility-sign.svg')}}"></img> Pristup za osobe sa invaliditetom</label>
            <select class="form-control" id="pzosi" name="pristup_invalid">
              <option value="" disabled>Odaberite</option>
              <option value="Obezbjeden">Obezbjeđen</option>
              <option value="Direktno sa platoa">Direktno sa platoa</option>
              <option value="Nije obezbjeden">Nije obezbjeđen</option>
            </select>
          </div>
          
          <div class="form-group col-md-4">
                    <label for="svlacionice"><img class="flow-icons-013" src="{{asset('assets/images/icons/room-key.svg')}}"></img> Broj ormarica</label>
                    <input type="number" name="broj_ormarica" id="svlacionice" class="form-control" placeholder="Unesite broj svlačionica">
                  </div>
          
          </div>
          
          <div class="row form-objavi-klub-01">
              <header class="card__header">
                <h4><i class="fa fa-info-circle"></i> Standardi po Sve Za Sportu</h4>
              </header>
       </div>
       <div class="row">
          <div class="form-group col-md-3">
            <label for="tusevi">Rezervacija termina</label>
            <select class="form-control" id="tusevi" name="rezervacija">
              <option value="" disabled>Odaberite</option>
              <option value="Da">Da</option>
              <option value="Ne">Ne</option>
            </select>
          </div>
          
          <div class="form-group col-md-3">
            <label for="tabla">Ekran za rezultate</label>
            <select class="form-control" id="tabla" name="tabla">
              <option value="" disabled>Odaberite</option>
              <option value="Da">Da</option>
              <option value="Ne">Ne</option>
            </select>
          </div>
          
          <div class="form-group col-md-3">
            <label for="tabla">Pomagala za djecu</label>
            <select class="form-control" id="tabla" name="pomagala">
              <option value="" disabled>Odaberite</option>
              <option value="Da">Da</option>
              <option value="Ne">Ne</option>
            </select>
          </div>
          
          <div class="form-group col-md-3">
            <label for="igraona">Ormaric za garderobu sa kljucem</label>
            <select class="form-control" id="igraona" name="ormaric">
              <option value="" disabled>Odaberite</option>
              <option value="Da">Da</option>
              <option value="Ne">Ne</option>
            </select>
          </div>
          
          <div class="form-group col-md-3">
            <label for="ormarici">Specijalna obuća</label>
            <select class="form-control" id="ormaric" name="obuca">
              <option value="" disabled>Odaberite</option>
              <option value="Da">Da</option>
              <option value="Ne">Ne</option>
            </select>
          </div>
          
          <div class="form-group col-md-3">
            <label for="toalet">Mokri čvor za posjetioce</label>
            <select class="form-control" id="toalet" name="toalet">
              <option value="" disabled>Odaberite</option>
              <option value="Da">Da</option>
              <option value="Ne">Ne</option>
            </select>
          </div>
          
          
          <div class="form-group col-md-3">
            <label for="klimatizacija">Klimatizacija</label>
            <select class="form-control" id="klimatizacija" name="klimatizacija">
              <option value="" disabled>Odaberite</option>
              <option value="Da">Da</option>
              <option value="Ne">Ne</option>
            </select>
          </div>
          <div class="form-group col-md-3">
            <label for="klimatizacija">Higijenska oprema</label>
            <select class="form-control" id="klimatizacija" name="oprema">
              <option value="" disabled>Odaberite</option>
              <option value="Da">Da</option>
              <option value="Ne">Ne</option>
            </select>
          </div>
          
           <div class="form-group col-md-3">
            <label for="video">Clanska kartica</label>
            <select class="form-control" id="video" name="clanska_kartica">
              <option value="" disabled>Odaberite</option>
              <option value="Da">Da</option>
              <option value="Ne">Ne</option>
            </select>
          </div>

          <div class="form-group col-md-3">
            <label for="video">Video nadzor</label>
            <select class="form-control" id="video" name="video_nadzor">
              <option value="" disabled>Odaberite</option>
              <option value="Da">Da</option>
              <option value="Ne">Ne</option>
            </select>
          </div>
          
        </div>
      </div>
          
      
      <!-- Tab: Predispozicije / End -->
      
      <!-- Tab: Vremeplov -->
      
      <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-biografija">
      <div class="row">
        
        <div class="row identitet-style">
         
         <div class="col-md-12">
         
          <div class="form-group col-md-12">
          <label for="opis"><img class="flow-icons-013" src="{{asset('assets/images/icons/edit.svg')}}"></img> Vremeplov objekta</label>
          <textarea name="content" class="form-control" rows="20" id="opis" maxlength="1050" placeholder="Upišite ukratko informacije vezane za historijat vašeg kluba i njegovu tradiciju..."></textarea>
          </div>
          
         </div>
         
        </div>
        
      </div>
      
      <div class="row">
        <div class="form-group form-group--submit col-md-6">
                    <a href="#" class="btn btn-default btn-sm btn-block btn-nazad"><i class="fa fa-chevron-left"></i> Nazad</a>
                </div>
        <div class="form-group form-group--submit col-md-6">
                    <a href="#" class="btn btn-default btn-sm btn-block btn-dalje">Sljedeći korak <i class="fa fa-chevron-right"></i></a>
                </div>
      </div>
      
      </div>
      
      <!-- Tab: Vremeplov / End -->
      
      
      
      <!-- Tab: Foto galerija -->
      <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-galerija">
      
        
        
       <div class="row dodavanje-slika">
                      <div class="col-md-12 sadrzaj-slike">
              <p class="dodaj-sliku-naslov">Dodajte slike</p>
              <p class="dodaj-sliku-call">u Vašu galeriju</p>
              <label class="btn btn-default btn-xs btn-file dodaj-sliku-button">
              Odaberi slike... <input type="file" class="galerijak" name="galerija[]" accept="image/*" accept="image/*" multiple style="display: none;">
              </label>
              <div class="info001">
              <p class="info-upload-slike">Preporučena dimenzija za vaše slike:</p>
              <p class="info-upload-slike">1920x1080 px</p>
              </div>
            </div>
        </div>
        
       
          
         <div class="row form-objavi-klub-01">
          <div class="album__item col-xs-6 col-sm-3">
            <div class="album__item-holder">
              <a href="images/banner-122.jpg" class="album__item-link mp_gallery">
              <figure class="album__thumb">
                <img src="{{asset('images/banner-122.jpg')}}" alt="">
              </figure>
              <div class="album__item-desc">
                <img src="{{asset('images/icons/expand-square.svg')}}" class="pregled-slike" alt=""></img>
              </div>
              </a>
            </div>
            <div class="progress-stats upload-slike-statust-bar">
                        <div class="progress">
                          <div class="progress__bar progress__bar-width-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
          </div>
          
          
        </div>
        
        <div class="row">
          <div class="col-md-4"></div>
          
          <div class="col-md-4"></div>
        </div>
        
        <div class="row">
          <div class="form-group form-group--submit col-md-6">
            <a href="#" class="btn btn-default btn-sm btn-block btn-nazad"><i class="fa fa-chevron-left"></i> Nazad</a>
          </div>
          <div class="form-group form-group--submit col-md-6" >
            <button href="#" type="submit" class="btn btn-default btn-sm btn-block btn-dalje"><i class="fa fa-plus-circle"></i> Završi i objavi</button>
            </form>
            <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">

              </div>
            <!-- Modal content / End -->
          </div>
        </div>
      
      </div>
      <!-- Tab: Foto galerija / End -->
      
      </div>
        <!-- Single Product Tabbed Content / End -->
    </div>
    </div>
    </div>
    </div>
    
    </div>
    </div>

@endsection