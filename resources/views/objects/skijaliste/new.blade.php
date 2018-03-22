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
            <a href="index.php"><img src="assets/images/soccer/logo.png" srcset="assets/images/soccer/logo@2x.png 2x" alt="Alchemists"></a>
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
            <h1 class="page-icon-objavi-title"><img src="assets/images/icons/skijaliste.svg"></img></h1>
            <h1 class="page-heading__title">Objavi Objekt</h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li class="registracija-podnaslov">Skijalište</li>
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
      <li role="presentation"><a href="#tab-predispozicije" role="tab" data-toggle="tab"><i class="fa fa-bolt"></i><small>Karakteristike</small>Objekta</a></li>
            <li role="presentation"><a href="#tab-biografija" role="tab" data-toggle="tab"><i class="fa fa-history"></i><small>Vremeplov</small>Objekta</a></li>
      <li role="presentation"><a href="#tab-staze" role="tab" data-toggle="tab"><i class="fa fa-road"></i><small>Staze i</small>Liftovi</a></li>
      <li role="presentation"><a href="#tab-cjenovnik" role="tab" data-toggle="tab"><i class="fa fa-database"></i><small>Cjenovnik</small>Usluga</a></li>
      <li role="presentation"><a href="#tab-galerija" role="tab" data-toggle="tab"><i class="fa fa-picture-o"></i><small>Foto</small>Galerija</a></li>
          </ul>
        
          <!-- Tab panes -->
          <div class="tab-content card__content">
    
            
      <!-- Tab: Općenito -->
            <div role="tabpanel" class="tab-pane fade in active" id="tab-opcenito">
      <div class="row">
        <form action="#">       
        <div class="row identitet-style">
        
         <div class="col-md-6 objavi-klub-logo-setup">
         
            <div class="col-md-7">
          
                      <div class="alc-staff__photo">
                        <img class="slika-upload-klub" src="assets/images/objekti/lrg-bjelasnica2.jpg" alt="">
                      </div>
                   
            </div>
          
                    <div class="col-md-5 sadrzaj-slike">
            
              <p class="dodaj-sliku-naslov klub-a1">Slika profila</p>
              <p class="dodaj-sliku-call">Identitet objekta</p>
              <label class="btn btn-default btn-xs btn-file dodaj-sliku-button">
              Odaberi sliku... <input type="file" style="display: none;">
              </label>
              <div class="info001">
              <p class="info-upload-slike">Preporučene dimenzije za sliku:</p>
              <p class="info-upload-slike">Minimalno: 980x720 px</p>
              </div>
              
          </div>
         </div>
         
         <div class="col-md-6">
         
          <div class="form-group col-md-12">
                    <label for="ime-kluba"><img class="flow-icons-013" src="assets/images/icons/edit.svg"></img> Naziv objekta</label>
                    <input type="text" name="ime-kluba" id="ime-sportiste" class="form-control" placeholder="Unesite puni naziv objekta">
                  </div>
          
         </div>
         
        </div>
        
        
        <div class="row form-segment">
          <header class="card__header">
          <h4><i class="fa fa-location-arrow"></i> Navigacija</h4>
          </header>
         </div>
        
          <div class="form-group col-md-4">
                    <label for="kontinent"><img class="flow-icons-013" src="assets/images/icons/international-delivery.svg"></img> Kontinent</label>
                    <select class="form-control" id="kontinent">
              <option value="eu" disabled selected>Evropa</option>
            </select>
          </div>
        
          <div class="form-group col-md-4">
                    <label for="drzava"><img class="flow-icons-013" src="assets/images/icons/earth.svg"></img> Država</label>
                    <select class="form-control" id="drzava">
              <option value="bih" disabled selected>Bosna i Hercegovina</option>
            </select>
          </div>
        
          <div class="form-group col-md-4">
                    <label for="entitet"><img class="flow-icons-013" src="assets/images/icons/map.svg"></img> Entitet/Distrikt</label>
                    <select class="form-control" id="entitet">
              <option value="" disabled selected>Izaberite entitet/distrikt</option>
            <option value="fbih">Federacija BiH</option>
              <option value="rs">Republika Srpska</option>
            <option value="distrikt" disabled>Distrikt Brčko</option>
            </select>
          </div>
        
          <div class="form-group col-md-4">
                    <label for="kanton"><img class="flow-icons-013" src="assets/images/icons/placeholder.svg"></img> Kanton</label>
                    <select class="form-control" id="kanton">
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
          
          <div class="form-group col-md-4">
                    <label for="opcine-ks"><img class="flow-icons-013" src="assets/images/icons/opcina.svg"></img> Općine Kantona Sarajevo</label>
                    <select class="form-control" id="opcine-ks">
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
          
          <div class="form-group col-md-4">
                    <label for="regija"><img class="flow-icons-013" src="assets/images/icons/placeholder.svg"></img> Regija</label>
                    <select class="form-control" id="regija">
              <option value="" disabled selected>Izaberite regiju</option>
            <option value="blk" disabled>Banjalučka</option>
              <option value="dbj" disabled>Dobojsko-bijeljinska</option>
            <option value="szv">Sarajevsko-zvornička</option>
              <option value="tbf"disabled>Trebinjsko-fočanska</option>
            </select>
          </div>
          
          <div class="form-group col-md-4">
                    <label for="opcine-sz-reg"><img class="flow-icons-013" src="assets/images/icons/opcina.svg"></img> Općine Sarajevsko-Zvorničke regije</label>
                    <select class="form-control" id="opcine-sz-reg">
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
                    <label for="mjesto"><img class="flow-icons-013" src="assets/images/icons/small-calendar.svg"></img> Mjesto/Grad kluba</label>
                    <input type="text" name="mjesto" id="mjesto" class="form-control" placeholder="Unesite mjesto kluba" required>
                  </div>
          
        </form>
      </div>
          
      
      
      <div class="row form-objavi-klub-01">
              <header class="card__header">
                <h4><i class="fa fa-share-alt"></i> Socijalne mreže</h4>
              </header>
       </div>
       <div class="row">
        <form action="#">
        
          <div class="form-group col-md-6">
            <label for="fcb"><img class="flow-icons-013" src="assets/images/icons/facebook.svg"></img> Facebook stranica</label>
            <input type="text" name="fcb" id="fcb" class="form-control" placeholder="Unesite link službene facebook stranice">
          </div>
          
          <div class="form-group col-md-6">
            <label for="twt"><img class="flow-icons-013" src="assets/images/icons/twitter.svg"></img> Twitter profil</label>
            <input type="text" name="twt" id="twt" class="form-control" placeholder="Unesite link službenog twitter profila">
          </div>
          
          <div class="form-group col-md-6">
            <label for="inst"><img class="flow-icons-013" src="assets/images/icons/instagram.svg"></img> Instagram profil</label>
            <input type="text" name="inst" id="inst" class="form-control" placeholder="Unesite link službenog instagram profila">
          </div>
          
          <div class="form-group col-md-6">
            <label for="yt"><img class="flow-icons-013" src="assets/images/icons/youtube.svg"></img> YouTUBE pofil</label>
            <input type="text" name="yt" id="yt" class="form-control" placeholder="Unesite link službenog YouTUBE kanala">
          </div>
          
        </form>
      </div>
      
      <div class="row form-objavi-klub-01">
              <header class="card__header">
                <h4><i class="fa fa-location-arrow"></i> Navigacija</h4>
              </header>
       </div>
       <div class="row">
        <form action="#">
        
          <div class="form-group col-md-12">
            <label for="kakodoobjekta"><img class="flow-icons-013" src="assets/images/icons/code.svg"></img> Ugradbeni kod sa Google Maps</label>
            <input type="text" name="kakodoobjekta" id="kakodoobjekta" class="form-control" placeholder="Zalijepite ugradbeni kod sa Google Maps">
          </div>
          
        </form>
        
        <div class="col-md-6">
                </div>
        <div class="form-group form-group--submit col-md-6" >
                    <a href="#" class="btn btn-default btn-sm btn-block btn-dalje">Sljedeći korak <i class="fa fa-chevron-right"></i></a>
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
        <form action="#">
          <div class="form-group col-md-4">
              <label class="control-label" for="sezona"><i class="fa fa-calendar-o"></i> Početak sezone</label>
              <input class="form-control" id="sezona" name="sezona" placeholder="Izaberite datum početka sezone" type="text"/>
              </div>
          
          <div class="form-group col-md-4">
                    <label for="nadmorska"><img class="flow-icons-013" src="assets/images/icons/nadmorska.svg"></img> Nadmorska visina</label>
                    <input type="number" name="nadmorska" id="nadmorska" min="1" class="form-control" placeholder="Unesite nadmorsku visinu u metrima">
                  </div>
          
          <div class="form-group col-md-4">
                    <label for="staze"><img class="flow-icons-013" src="assets/images/icons/river-trail.svg"></img> Ukupno staza</label>
                    <input type="number" name="staze" id="staze" min="1" class="form-control" placeholder="Unesite broj staza">
                  </div>
          
          <div class="form-group col-md-4">
                    <label for="liftovi"><img class="flow-icons-013" src="assets/images/icons/ski-lift.svg"></img> Ukupno liftova</label>
                    <input type="number" name="liftovi" id="liftovi" min="1" class="form-control" placeholder="Unesite broj liftova">
                  </div>
          
          <div class="form-group col-md-4">
                    <label for="kapacitet"><img class="flow-icons-013" src="assets/images/icons/gledaoci.svg"></img> Kapacitet korisnika</label>
                    <input type="number" name="kapacitet" id="kapacitet" min="1" class="form-control" placeholder="Unesite kapacitet korisnika">
                  </div>
          
                </form>
      </div>
        
      <div class="row form-objavi-klub-01">
              <header class="card__header">
                <h4><i class="fa fa-info-circle"></i> Osobine objekta</h4>
              </header>
       </div>
       <div class="row">
        <form action="#">
          
          <div class="form-group col-md-4">
            <label for="wifi"><img class="flow-icons-013" src="assets/images/icons/wifi.svg"></img> Wi-Fi</label>
            <select class="form-control" id="wifi">
              <option value="" disabled selected>Pristup internetu</option>
              <option value="">Da</option>
              <option value="">Ne</option>
            </select>
          </div>
          
          <div class="form-group col-md-4">
            <label for="parking"><img class="flow-icons-013" src="assets/images/icons/parking-sign.svg"></img> Parking</label>
            <select class="form-control" id="parking">
              <option value="" disabled selected>Odaberite</option>
              <option value="">Da</option>
              <option value="">Ne</option>
            </select>
          </div>
          
          <div class="form-group col-md-4">
            <label for="hoteli"><img class="flow-icons-013" src="assets/images/icons/bed.svg"></img> Hoteli i prenoćišta</label>
            <select class="form-control" id="hoteli">
              <option value="" disabled selected>Odaberite</option>
              <option value="">Da</option>
              <option value="">Ne</option>
            </select>
          </div>
          
          <div class="form-group col-md-4">
            <label for="kafeterija"><img class="flow-icons-013" src="assets/images/icons/coffee-cup.svg"></img> Coffee barovi</label>
            <select class="form-control" id="kafeterija">
              <option value="" disabled selected>Odaberite</option>
              <option value="">Da</option>
              <option value="">Ne</option>
            </select>
          </div>
          
          <div class="form-group col-md-4">
            <label for="restoran"><img class="flow-icons-013" src="assets/images/icons/cutlery.svg"></img> Restorani</label>
            <select class="form-control" id="restoran">
              <option value="" disabled selected>Odaberite</option>
              <option value="">Da</option>
              <option value="">Ne</option>
            </select>
          </div>
          
          <div class="form-group col-md-4">
            <label for="najam"><img class="flow-icons-013" src="assets/images/icons/ski-glasses.svg"></img> Najam opreme</label>
            <select class="form-control" id="najam">
              <option value="" disabled selected>Odaberite</option>
              <option value="">Da</option>
              <option value="">Ne</option>
            </select>
          </div>
          
          </div>
          
          <div class="row form-objavi-klub-01">
              <header class="card__header">
                <h4><i class="fa fa-info-circle"></i> Standardi po Sve Za Sportu</h4>
              </header>
       </div>
       <div class="row">
        <form action="#">
          
          <div class="form-group col-md-3">
            <label for="szo">Služba za održavanje</label>
            <select class="form-control" id="szo">
              <option value="" disabled selected>Odaberite</option>
              <option value="">Da</option>
              <option value="">Ne</option>
            </select>
          </div>
          
          <div class="form-group col-md-3">
            <label for="hij">Hitna interventna jedinica</label>
            <select class="form-control" id="hij">
              <option value="" disabled selected>Odaberite</option>
              <option value="">Da</option>
              <option value="">Ne</option>
            </select>
          </div>
          
          <div class="form-group col-md-3">
            <label for="skiskola">Škola skijanja</label>
            <select class="form-control" id="skiskola">
              <option value="" disabled selected>Odaberite</option>
              <option value="">Da</option>
              <option value="">Ne</option>
            </select>
          </div>
          
          <div class="form-group col-md-3">
            <label for="boardskola">Škola snowboarding-a</label>
            <select class="form-control" id="boardskola">
              <option value="" disabled selected>Odaberite</option>
              <option value="">Da</option>
              <option value="">Ne</option>
            </select>
          </div>
          
          <div class="form-group col-md-3">
            <label for="prodavnice">Prodavnice skijaške opreme</label>
            <select class="form-control" id="prodavnice">
              <option value="" disabled selected>Odaberite</option>
              <option value="">Da</option>
              <option value="">Ne</option>
            </select>
          </div>
          
          
          <div class="form-group col-md-3">
            <label for="mse">Mobilna spasilačka ekipa</label>
            <select class="form-control" id="mse">
              <option value="" disabled selected>Odaberite</option>
              <option value="">Da</option>
              <option value="">Ne</option>
            </select>
          </div>
          
          <div class="form-group col-md-3">
            <label for="toalet">Mokri čvor za posjetioce</label>
            <select class="form-control" id="toalet">
              <option value="" disabled selected>Odaberite</option>
              <option value="">Da</option>
              <option value="">Ne</option>
            </select>
          </div>
          
          <div class="form-group col-md-3">
            <label for="nocno">Noćno skijanje</label>
            <select class="form-control" id="nocno">
              <option value="" disabled selected>Odaberite</option>
              <option value="">Da</option>
              <option value="">Ne</option>
            </select>
          </div>
          
          <div class="form-group col-md-3">
            <label for="video">Video nadzor</label>
            <select class="form-control" id="video">
              <option value="" disabled selected>Odaberite</option>
              <option value="">Da</option>
              <option value="">Ne</option>
            </select>
          </div>
          
                </form>
        </div>
      </div>
        
      
      <!-- Tab: Predispozicije / End -->
      
      <!-- Tab: Vremeplov -->
      
      <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-biografija">
      <div class="row obavijesti-racun">
        <div class="alert alert-warning">
          <strong>PREMIUM račun Vam dozvoljava unos do maksimalnih 150 linija teksta.</strong>
        </div>
        <div class="alert alert-warning">
          <button href="premium.php" type="button" class="btn btn-xs btn-default btn-outline alert-btn-right">Aktiviraj premium</button>
          <strong>STANDARDAN račun Vam dozvoljava unos do maksimalnih 50 linija teksta.</strong>
        </div>
      </div>
      <div class="row">
        
        <form action="#">       
        <div class="row identitet-style">
         
         <div class="col-md-12">
         
          <div class="form-group col-md-12">
          <label for="opis"><img class="flow-icons-013" src="assets/images/icons/edit.svg"></img> Vremeplov objekta</label>
          <textarea class="form-control" rows="20" id="opis" maxlength="1050" placeholder="Upišite ukratko informacije vezane za historijat vašeg kluba i njegovu tradiciju..."></textarea>
          </div>
          
         </div>
         
        </div>
        </form>
        
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
      
      <!-- Tab: Staze -->
      
      <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-staze">
      
      <div class="row">
      <div class="row form-segment">
        <header class="card__header">
                <h4><i class="fa fa-plus-circle"></i> Unos staze skijališta</h4>
              </header>
       </div>
        <div class="col-md-6">
        
        <div class="form-group col-md-12">
                    <label for="nazivstaze">Naziv staze</label>
                    <input type="text" name="nazivstaze" id="nazivstaze" class="form-control" placeholder="Unesite naziv staze">
                  </div>
          <div class="form-group col-md-12">
                    <label for="tezina">Težina staze</label>
                    <select class="form-control" id="tezina">
              <option value="" disabled selected>Odaberite</option>
              <option value="">Lahko</option>
              <option value="">Srednje</option>
              <option value="">Teško</option>
            </select>
                  </div>
          
        </div>
        <div class="col-md-6">
          <div class="form-group col-md-6 col-xs-12">
                    <label for="duzinastaze">Dužina staze</label>
                    <input type="number" name="duzinastaze" id="duzinastaze" class="form-control" placeholder="Unesite dužinu staze u metrima">
                  </div>
          <div class="form-group col-md-6 col-xs-12">
                    <label for="trajanjespusta">Trajanje spusta</label>
                    <input type="number" name="trajanjespusta" id="trajanjespusta" class="form-control" placeholder="Unesite vrijeme trajanja spusta u minutama">
                  </div>
          <div class="form-group col-md-6 col-xs-12">
                    <label for="tackapolazista">Tačka polazišta</label>
                    <input type="number" name="tackapolazista" id="tackapolazista" class="form-control" placeholder="Unesite nv tačke polazišta">
                  </div>
          <div class="form-group col-md-6 col-xs-12">
                    <label for="tackaizlaza">Tačka izlaza</label>
                    <input type="number" name="tackaizlaza" id="tackaizlaza" class="form-control" placeholder="Unesite nv tačke izlaza">
                  </div>
        </div>
      </div>
      
      <div class="row">
      <div class="row form-segment">
        <header class="card__header">
                <h4><i class="fa fa-plus-circle"></i> Unos ski lifta skijališta</h4>
              </header>
       </div>
        <div class="col-md-6">
        
        <div class="form-group col-md-12">
                    <label for="nazivlifta">Naziv (oznaka) lifta</label>
                    <input type="text" name="nazivlifta" id="nazivlifta" class="form-control" placeholder="Unesite naziv lifta">
                  </div>
          <div class="form-group col-md-12">
                    <label for="vrstalifta">Vrsta lifta</label>
                    <select class="form-control" id="vrstalifta">
              <option value="" disabled selected>Odaberite</option>
              <option value="">Jednosjed</option>
              <option value="">Dvosjed</option>
              <option value="">Trosjed</option>
              <option value="">Ski lift</option>
              <option value="">Vagon</option>
            </select>
                  </div>
          
        </div>
        <div class="col-md-6">
          <div class="form-group col-md-6 col-xs-12">
                    <label for="kapacitetkorisnika">Kapacitet korisnika</label>
                    <input type="number" name="kapacitetkorisnika" id="kapacitetkorisnika" class="form-control" placeholder="Unesite kapacitet kornisnika">
                  </div>
          <div class="form-group col-md-6 col-xs-12">
                    <label for="duzinavoznje">Dužina vožnje</label>
                    <input type="number" name="duzinavoznje" id="duzinavoznje" class="form-control" placeholder="Unesite dužiinu vožnje u metrima">
                  </div>
          <div class="form-group col-md-6 col-xs-12">
                    <label for="trajanjevoznje">Trajanje vožnje</label>
                    <input type="number" name="trajanjevoznje" id="trajanjevoznje" class="form-control" placeholder="Unesite trajanje vožnje">
                  </div>
          <div class="form-group col-md-6 col-xs-12">
                    <label for="krajnjatacka">Krajnja tačka</label>
                    <input type="number" name="krajnjatacka" id="krajnjatacka" class="form-control" placeholder="Unesite nv krajnje tačke">
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
      
      <!-- Tab: Staze / End -->
      
      <!-- Tab: Cjenovnik -->
      
      <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-cjenovnik">
      
      <div class="row">
      <div class="row form-segment">
        <header class="card__header">
                <h4><i class="fa fa-plus-circle"></i> Dodavanje cijene</h4>
              </header>
       </div>
        <div class="col-md-6">
        
        <div class="form-group col-md-12">
                    <label for="opiskarte">Opis karte</label>
                    <input type="text" name="opiskarte" id="opiskarte" class="form-control" placeholder="Unesite opis karte">
                  </div>
          
        </div>
        <div class="col-md-6">
          <div class="form-group col-md-6 col-xs-12">
                    <label for="cijenaodrasli">Cijena karte odrasli</label>
                    <input type="number" name="cijenaodrasli" id="cijenaodrasli" class="form-control" placeholder="Unesite cijenu u KM">
                  </div>
          <div class="form-group col-md-6 col-xs-12">
                    <label for="cijenadjeca">Cijena karte djeca</label>
                    <input type="number" name="cijenadjeca" id="cijenadjeca" class="form-control" placeholder="Unesite cijenu u KM">
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
      
      <!-- Tab: Cjenovnik / End -->
      
      
      
      <!-- Tab: Foto galerija -->
      <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-galerija">
      
        <div class="row obavijesti-racun">
          <div class="alert alert-warning">
            <strong>PREMIUM račun Vam dozvoljava unos do maksimalnih 20 slika.</strong>
          </div>
          <div class="alert alert-warning">
            <button href="premium.php" type="button" class="btn btn-xs btn-default btn-outline alert-btn-right">Aktiviraj premium</button>
            <strong>STANDARDAN račun Vam dozvoljava unos do maksimalno 12 slika.</strong>
          </div>
        </div>
        
        
        <div class="row dodavanje-slika">
                      <div class="col-md-12 sadrzaj-slike">
              <p class="dodaj-sliku-naslov">Dodajte slike</p>
              <p class="dodaj-sliku-call">u Vašu galeriju</p>
              <label class="btn btn-default btn-xs btn-file dodaj-sliku-button">
              Odaberi slike... <input type="file" multiple style="display: none;">
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
              <a href="assets/images/banner-122.jpg" class="album__item-link mp_gallery">
              <figure class="album__thumb">
                <img src="assets/images/banner-122.jpg" alt="">
              </figure>
              <div class="album__item-desc">
                <img src="assets/images/icons/expand-square.svg" class="pregled-slike" alt=""></img>
              </div>
              </a>
            </div>
            <div class="progress-stats upload-slike-statust-bar">
                        <div class="progress">
                          <div class="progress__bar progress__bar-width-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
          </div>
          
          <div class="album__item col-xs-6 col-sm-3">
            <div class="album__item-holder">
              <a href="assets/images/banner-122.jpg" class="album__item-link mp_gallery">
              <figure class="album__thumb">
                <img src="assets/images/banner-122.jpg" alt="">
              </figure>
              <div class="album__item-desc">
                <img src="assets/images/icons/expand-square.svg" class="pregled-slike" alt=""></img>
              </div>
              </a>
            </div>
            <div class="progress-stats upload-slike-statust-bar">
                        <div class="progress">
                          <div class="progress__bar progress__bar-width-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
          </div>
          
          <div class="album__item col-xs-6 col-sm-3">
            <div class="album__item-holder">
              <a href="assets/images/banner-122.jpg" class="album__item-link mp_gallery">
              <figure class="album__thumb">
                <img src="assets/images/banner-122.jpg" alt="">
              </figure>
              <div class="album__item-desc">
                <img src="assets/images/icons/expand-square.svg" class="pregled-slike" alt=""></img>
              </div>
              </a>
            </div>
            <div class="progress-stats upload-slike-statust-bar">
                        <div class="progress">
                          <div class="progress__bar progress__bar-width-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
          </div>
          
          <div class="album__item col-xs-6 col-sm-3">
            <div class="album__item-holder">
              <a href="assets/images/banner-122.jpg" class="album__item-link mp_gallery">
              <figure class="album__thumb">
                <img src="assets/images/banner-122.jpg" alt="">
              </figure>
              <div class="album__item-desc">
                <img src="assets/images/icons/expand-square.svg" class="pregled-slike" alt=""></img>
              </div>
              </a>
            </div>
            <div class="progress-stats upload-slike-statust-bar">
                        <div class="progress">
                          <div class="progress__bar progress__bar-width-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
          </div>
          
          <div class="album__item col-xs-6 col-sm-3">
            <div class="album__item-holder">
              <a href="assets/images/banner-122.jpg" class="album__item-link mp_gallery">
              <figure class="album__thumb">
                <img src="assets/images/banner-122.jpg" alt="">
              </figure>
              <div class="album__item-desc">
                <img src="assets/images/icons/expand-square.svg" class="pregled-slike" alt=""></img>
              </div>
              </a>
            </div>
            <div class="progress-stats upload-slike-statust-bar">
                        <div class="progress">
                          <div class="progress__bar progress__bar-width-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
          </div>
          
          <div class="album__item col-xs-6 col-sm-3">
            <div class="album__item-holder">
              <a href="assets/images/banner-122.jpg" class="album__item-link mp_gallery">
              <figure class="album__thumb">
                <img src="assets/images/banner-122.jpg" alt="">
              </figure>
              <div class="album__item-desc">
                <img src="assets/images/icons/expand-square.svg" class="pregled-slike" alt=""></img>
              </div>
              </a>
            </div>
            <div class="progress-stats upload-slike-statust-bar">
                        <div class="progress">
                          <div class="progress__bar progress__bar-width-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
          </div>
          
          <div class="album__item col-xs-6 col-sm-3">
            <div class="album__item-holder">
              <a href="assets/images/banner-122.jpg" class="album__item-link mp_gallery">
              <figure class="album__thumb">
                <img src="assets/images/banner-122.jpg" alt="">
              </figure>
              <div class="album__item-desc">
                <img src="assets/images/icons/expand-square.svg" class="pregled-slike" alt=""></img>
              </div>
              </a>
            </div>
            <div class="progress-stats upload-slike-statust-bar">
                        <div class="progress">
                          <div class="progress__bar progress__bar-width-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
          </div>
          
          <div class="album__item col-xs-6 col-sm-3">
            <div class="album__item-holder">
              <a href="assets/images/banner-122.jpg" class="album__item-link mp_gallery">
              <figure class="album__thumb">
                <img src="assets/images/banner-122.jpg" alt="">
              </figure>
              <div class="album__item-desc">
                <img src="assets/images/icons/expand-square.svg" class="pregled-slike" alt=""></img>
              </div>
              </a>
            </div>
            <div class="progress-stats upload-slike-statust-bar">
                        <div class="progress">
                          <div class="progress__bar progress__bar-width-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
          </div>
          
          <div class="album__item col-xs-6 col-sm-3">
            <div class="album__item-holder">
              <a href="assets/images/uploading.jpg" class="album__item-link mp_gallery">
              <figure class="album__thumb">
                <img src="assets/images/uploading.jpg" alt="">
              </figure>
              <div class="album__item-desc">
                <img src="assets/images/icons/expand-square.svg" class="pregled-slike" alt=""></img>
              </div>
              </a>
            </div>
            <div class="progress-stats upload-slike-statust-bar">
                        <div class="progress">
                          <div class="progress__bar progress__bar-width-80" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
          </div>
          
          <div class="album__item col-xs-6 col-sm-3">
            <div class="album__item-holder">
              <a href="assets/images/uploading.jpg" class="album__item-link mp_gallery">
              <figure class="album__thumb">
                <img src="assets/images/uploading.jpg" alt="">
              </figure>
              <div class="album__item-desc">
                <img src="assets/images/icons/expand-square.svg" class="pregled-slike" alt=""></img>
              </div>
              </a>
            </div>
            <div class="progress-stats upload-slike-statust-bar">
                        <div class="progress">
                          <div class="progress__bar progress__bar-width-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
          </div>
          
          <div class="album__item col-xs-6 col-sm-3">
            <div class="album__item-holder">
              <a href="assets/images/uploading.jpg" class="album__item-link mp_gallery">
              <figure class="album__thumb">
                <img src="assets/images/uploading.jpg" alt="">
              </figure>
              <div class="album__item-desc">
                <img src="assets/images/icons/expand-square.svg" class="pregled-slike" alt=""></img>
              </div>
              </a>
            </div>
            <div class="progress-stats upload-slike-statust-bar">
                        <div class="progress">
                          <div class="progress__bar progress__bar-width-40" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
          </div>
          
          <div class="album__item col-xs-6 col-sm-3">
            <div class="album__item-holder">
              <a href="assets/images/uploading.jpg" class="album__item-link mp_gallery">
              <figure class="album__thumb">
                <img src="assets/images/uploading.jpg" alt="">
              </figure>
              <div class="album__item-desc">
                <img src="assets/images/icons/expand-square.svg" class="pregled-slike" alt=""></img>
              </div>
              </a>
            </div>
            <div class="progress-stats upload-slike-statust-bar">
                        <div class="progress">
                          <div class="progress__bar progress__bar-width-10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
          </div>
          
          
        </div>
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group form-group--submit col-md-4">
            <a href="#" class="btn btn-default btn-sm btn-block btn-dodaj"><i class="fa fa-database"></i> 3 Dodavanje fotografije </a>
          </div>
          <div class="col-md-4"></div>
        </div>
        
        <div class="row">
          <div class="form-group form-group--submit col-md-6">
            <a href="#" class="btn btn-default btn-sm btn-block btn-nazad"><i class="fa fa-chevron-left"></i> Nazad</a>
          </div>
          <div class="form-group form-group--submit col-md-6" >
            <a href="#" type="submit" class="btn btn-default btn-sm btn-block btn-dalje" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> Završi i objavi</a>
            <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
              
                <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">USPJEŠNO STE KREIRALI KLUB</h4>
                </div>
                <div class="modal-body">
                  <img class="ikona-modal" src="assets/images/icons/checked.svg"></img>
                  <p class="bravo-info">Predložak koji ste napravili će biti u najkraćem mogućem vremenskom periodu pregledan od strane naše administracije, te ukoliko bude zadovoljavao sve uvjete koje nalaže Sve Za Sport, biti će i objavljen.</p>
                  <p class="bravo-hello">Sportski pozdrav!</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-close-modal-01" data-dismiss="modal"><i class="fa fa-times"></i> Zatvori prozor</button>
                </div>
                </div>
                
              </div>
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

    <!-- Content / End -->

 @endsection