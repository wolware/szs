 function previewFile(name, place){
      var preview = document.getElementById(place);
      var file    = document.getElementById(name).files[0];
      var reader  = new FileReader();

      reader.onloadend = function () {
          preview.src = reader.result;
      }

      if (file) {
          reader.readAsDataURL(file);
      } else {
          preview.src = "";
      }
 }

 $(function() {
   // Multiple images preview in browser
   var imagesPreview = function(input, placeToInsertImagePreview) {
    console.log("pozvana");
    var prvi = 0;
   var gk = document.getElementById('galerija_klub');
       if (input.files) {
           var filesAmount = input.files.length;

           for (i = 0; i < filesAmount; i++) {
               var reader = new FileReader();

               reader.onload = function(event) {
                    if(prvi==0){
                      var adnew = '<div class="album__item col-xs-6 col-sm-3"><div class="album__item-holder"><a href="'+event.target.result+'" class="album__item-link mp_gallery"><figure class="album__thumb"><img src="'+event.target.result+'" alt=""></figure><div class="album__item-desc"><img src="images/icons/expand-square.svg" class="pregled-slike" alt=""></img></div></a></div><div class="progress-stats upload-slike-statust-bar"><div class="progress"><div class="progress__bar progress__bar-width-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div></div></div></div>';
                      //$(adnew).appendTo('#galerija_klub');
                      $('.form-objavi-klub-01').append(adnew);
                    }
               }

               reader.readAsDataURL(input.files[i]);
           }
       }


   };

  $('.galerija').on('change', function() {
       imagesPreview(this);
      /*setTimeout(function(){
        $('.album__item').last().remove();
      },50);*/
   });
   $('.galerija_edit').on('change', function() {
       imagesPreview(this);
   });
});
    $(document).ready(function(){
        $('#entitet').change(function(){
            var _entitet = $(this).val();
            if(_entitet == "Federacija BiH"){
                $('#kantonDiv').css({"display":"block"});
                $('#opcineDiv').css({"display":"block"});
                $('#regijaDiv').css({"display":"none"});
            }else{
                $('#kantonDiv').css({"display":"none"});
                $('#opcineDiv').css({"display":"none"});
                $('#regijaDiv').css({"display":"block"});
            }
        });

        $('#tip-kluba').change(function(){
            var _tipkluba = $(this).val();
            if(_tipkluba == "Sportski klub"){
                $('#sportoviDiv').css({"display":"block"});
                $('#iSportoviDiv').css({"display":"none"});
            }else{
                $('#sportoviDiv').css({"display":"none"});
                $('#iSportoviDiv').css({"display":"block"});
            }
        });

        var trofej_new = `<div class="row">
            <div class="row form-segment">
              <header class="card__header">
                <h4><i class="fa fa-plus-circle"></i> Unos osvojenog trofeja/nagrade</h4>
              </header>
             </div>
                <div class="col-md-6">
                  <div class="form-group col-md-6">
                    <label for="vrsta-nagrade"><img class="flow-icons-013" src="{{asset('images/icons/medalja.svg')}}"></img> Vrsta nagrade</label>
                    <select name="vrsta_nagrade[]" class="form-control" id="vrsta-nagrade">
                        <option value="" selected>Izaberite vrstu osvojene nagrade</option>
                        <option value="medalja">Medalja</option>
                        <option value="trofej">Trofej/Pehar</option>
                        <option value="priznanje">Priznanje</option>
                        <option value="plaketa">Plaketa</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="tip-nagrade"><img class="flow-icons-013" src="{{asset('images/icons/medalja.svg')}}"></img> Tip nagrade</label>
                    <select name="tip_nagrade[]" class="form-control" id="tip-nagrade">
                        <option value="" selected>Izaberite tip nagrade</option>
                        <option value="zlato">Zlato (1. mjesto)</option>
                        <option value="srebro">Srebro (2. mjesto)</option>
                        <option value="bronza">Bronza (3. mjesto)</option>
                        <option value="ostalo">Ostalo</option>
                    </select>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="tip-nagrade"><img class="flow-icons-013" src="{{asset('images/icons/medalja.svg')}}"></img> Nivo takmiÄenja</label>
                    <select name="nivo_nagrade[]" class="form-control" id="tip-nagrade">
                        <option value="" selected>Izaberite nivo takmiÄenja</option>
                        <option value="intl">Internacionalni nivo</option>
                        <option value="regn">Regionalni nivo</option>
                        <option value="drzv">DrÅ¾avni nivo</option>
                        <option value="entt">Entitetski nivo</option>
                        <option value="drg">Drugo</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="takmicenje"><img class="flow-icons-013" src="{{asset('images/icons/trophy.svg')}}"></img> Naziv takmiÄenja</label>
                    <input type="text" name="trofej_takmicenja[]" id="takmicenje" class="form-control" placeholder="Unesite naziv takmicenja za koje je osvojena nagrada">
                  </div>
                  <div class="form-group col-md-6 col-xs-12">
                    <label for="sezona"><img class="flow-icons-013" src="{{asset('images/icons/small-calendar.svg')}}"></img> Sezona/Godina</label>
                    <input type="text" name="trofej_sezona[]" id="sezona" class="form-control" placeholder="Unesite Sezonu/Godinu osvajanja trofeja">
                  </div>
                  <div class="form-group col-md-6 col-xs-12">
                    <label for="osvajanja"><img class="flow-icons-013" src="{{asset('images/icons/the-sum-of.svg')}}"></img> Broj osvajanja</label>
                    <input type="number" name="trofej_osvajanja[]" id="osvajanja" class="form-control" placeholder="Unesite broj osvajanja trofeja">
                  </div>
                </div>
            </div>`;
            $('.btn-dodaj-trofej').click(function(){
                $('.troffeji').append(trofej_new);
            });


      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('form').length>0 ? $('form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    });
     $('#registerForm').validate({
      rules: {
        password: "required",
        password_confirmation: {
          equalTo: "#password"
        }
      }}
    );
      $('#settingsUpdateUser').validate({
      rules: {
        avatar: {
          extension: 'png|jpg|jpeg'
        }
      }}

  
    );


$('#createNewClub').validate({
  rules: {
    logo:{
      extension: 'png|jpg|jpeg'
    },
    godina_osnivanja : {
        number: true,
        required: true
    }
  }}
);
$('#createNewFootballer').validate({
  rules:{
    logo:{
      extension: 'png|jpg|jpeg'
    },
    ime:{
      required:true,
    },
    prezime:{
      required:true,
    },
    karakter:{
      required:true,
    },
    drzava:{
      required:true,
    },
    entitet: {
      required:true,
    },
    kanton:{
      required:true,
    },
    klub:{
      required:true,
    },
    visina:{
      required:true,
    },
    tezina:{
      required: true,
    }
  }
});
$.validator.addMethod('filesize', function (value, element, param) {
    return this.optional(element) || (element.files[0].size <= param)
}, 'File size must be less than {0}');
$('#editClubForm').validate({
  rules: {
    logo: {
      extension: 'png|jpg|jpeg',
      filesize: 1,
    }
  }
});

$('.prvi_korak_end').on('click', function(){
  $('#createNewClub').valid();
});

$('.btn-dalje').on('click', function(){
  $('#createNewFootballer').valid();
});
      jQuery.extend(jQuery.validator.messages, {
    required: "Ovo polje je obavezno.",
    remote: "Please fix this field.",
    email: "Unesite validnu e-mail adresu.",
    url: "Please enter a valid URL.",
    date: "Unesite validan datum",
    dateISO: "Please enter a valid date (ISO).",
    number: "Please enter a valid number.",
    digits: "Please enter only digits.",
    creditcard: "Please enter a valid credit card number.",
    equalTo: "Unesite istu vrijednost.",
    accept: "Please enter a value with a valid extension.",
    maxlength: jQuery.validator.format("Unesite manje od {0} karaktera."),
    minlength: jQuery.validator.format("Unesite najmanje {0} karaktera."),
    rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
    range: jQuery.validator.format("Please enter a value between {0} and {1}."),
    max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
    min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
});