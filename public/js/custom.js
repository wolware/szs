// Globalne varijable
var licnostiCount = 1;
var nagradeCount = 1;

function previewFile(name, place) {
    var preview = document.getElementById(place);
    var file = document.getElementById(name).files[0];
    var reader = new FileReader();

    reader.onloadend = function () {
        preview.src = reader.result;
    }

    if (file) {
        reader.readAsDataURL(file);
    } else {
        preview.src = "";
    }
}



$(function () {
    // Multiple images preview in browser


    var imagesPreview = function (input, placeToInsertImagePreview) {
        console.log("pozvana");
        var prvi = 0;
        var gk = document.getElementById('galerija_klub');
        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onloadend = function (event) {
                    if (prvi == 0) {
                        var adnew = '<div class="album__item col-xs-6 col-sm-3"><div class="album__item-holder"><a href="' + event.target.result + '" class="album__item-link mp_gallery"><figure class="album__thumb"><img src="' + event.target.result + '" alt=""></figure><div class="album__item-desc"><img src="images/icons/expand-square.svg" class="pregled-slike" alt=""></img></div></a></div><div class="progress-stats upload-slike-statust-bar"><div class="progress"><div class="progress__bar progress__bar-width-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div></div></div></div>';
                        //$(adnew).appendTo('#galerija_klub');
                        $('#tab-galerija .form-objavi-klub-01').append(adnew);

                    }
                }

                reader.readAsDataURL(input.files[i]);
            }
        }
    };

    $('.galerija').on('change', function () {
        var prvi = 0;
        var input = $(this);
        if (input.files) {
            var filesAmount = input.files.length;
            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onloadend = function (event) {
                    if (prvi == 0) {
                        var adnew = '<div class="album__item col-xs-6 col-sm-3"><div class="album__item-holder"><a href="' + event.target.result + '" class="album__item-link mp_gallery"><figure class="album__thumb"><img src="' + event.target.result + '" alt=""></figure><div class="album__item-desc"><img src="images/icons/expand-square.svg" class="pregled-slike" alt=""></img></div></a></div><div class="progress-stats upload-slike-statust-bar"><div class="progress"><div class="progress__bar progress__bar-width-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div></div></div></div>';
                        //$(adnew).appendTo('#galerija_klub');
                        $('#tab-galerija .form-objavi-klub-01').append(adnew);

                    }
                }

                reader.readAsDataURL(input.files[i]);
            }
        }
        //imagesPreview(this);
        /*setTimeout(function(){
          $('.album__item').last().remove();
        },50);*/
    });
    $('.galerijak').on('change', function () {
        var prvi = 0;
        var input = $(this).context;
        console.log(input.files);
        if (input.files) {
            var filesAmount = input.files.length;
            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onloadend = function (event) {
                    if (prvi == 0) {
                        var adnew = '<div class="album__item col-xs-6 col-sm-3"><div class="album__item-holder"><a href="' + event.target.result + '" class="album__item-link mp_gallery"><figure class="album__thumb"><img src="' + event.target.result + '" alt=""></figure><div class="album__item-desc"><img src="images/icons/expand-square.svg" class="pregled-slike" alt=""></img></div></a></div><div class="progress-stats upload-slike-statust-bar"><div class="progress"><div class="progress__bar progress__bar-width-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div></div></div></div>';
                        //$(adnew).appendTo('#galerija_klub');
                        $('#tab-galerija .form-objavi-klub-01').append(adnew);

                    }
                }

                reader.readAsDataURL(input.files[i]);
            }
        }
        //imagesPreview(this);
        /*setTimeout(function(){
          $('.album__item').last().remove();
        },50);*/
    });
    $('.galerija_edit').on('change', function () {
        imagesPreview(this);
    });
});


$(document).ready(function () {

    // Nadji najveci array key od old inputa za licnost ako postoji
    if($('.licnostHover').length) {
        var num = $('.licnostHover').map(function() {
            return $(this).data('key');
        }).get();

        var highest = Math.max.apply(Math, num);

        licnostiCount = highest + 1;
    }

    // Nadji najveci array key od old inputa za nagradu/trofej ako postoji
    if($('.nagradaHover').length) {
        var num1 = $('.nagradaHover').map(function() {
            return $(this).data('key');
        }).get();

        var highest1 = Math.max.apply(Math, num1);

        nagradeCount = highest1 + 1;
    }

    // Custom metode za validaciju
    // Provjera stringa
    jQuery.validator.addMethod("string", function(value, element){
        if (typeof value === 'string' || value instanceof String) {
            return true;
        }
        return false;
    }, "Polje mora biti tipa string.");

    $('#entitet').change(function () {
        var _entitet = $(this).val();
        if (_entitet == "Federacija BiH") {
            $('#kantonDiv').css({"display": "block"});
            $('#opcineDiv').css({"display": "block"});
            $('#regijaDiv').css({"display": "none"});
            $('#opSrb').css({"display": "none"});
        } else {
            $('#kantonDiv').css({"display": "none"});
            $('#opcineDiv').css({"display": "none"});
            $('#regijaDiv').css({"display": "block"});
            $('#opSrb').css({"display": "block"});
        }
    });

    // Validacije forme za dodavanje kluba
    $('#createNewClub').validate({
            ignore: ":not(:visible)",
            rules: {
                logo: {
                    required: true,
                    extension: 'png|jpg|jpeg'
                },
                name: {
                    required: true,
                    string: true,
                    maxlength: 255
                },
                karakter: {
                    required: true,
                    string: true,
                    maxlength: 255
                },
                kontinent: {
                    required: true,
                    string: true,
                    maxlength: 255
                },
                drzava: {
                    required: true,
                    string: true,
                    maxlength: 255
                },
                entitet: {
                    required: true,
                    string: true,
                    maxlength: 255
                },
                kanton: {
                    required: true,
                    string: true,
                    maxlength: 255
                },
                opcina: {
                    required: true,
                    string: true,
                    maxlength: 255
                },
                grad: {
                    required: true,
                    string: true,
                    maxlength: 255
                },
                tip: {
                    required: true,
                    string: true,
                    maxlength: 255
                },
                sport: {
                    required: true,
                    string: true,
                    maxlength: 255
                },
                kategorija: {
                    required: true,
                    string: true,
                    maxlength: 255
                },
                godina_osnivanja: {
                    digits: true,
                    range: [1800, new Date().getFullYear()]
                },
                teren: {
                    string: true,
                    maxlength: 255
                },
                takmicenje: {
                    string: true,
                    maxlength: 255
                },
                savez: {
                    string: true,
                    maxlength: 255
                },
                telefon1: {
                    digits: true,
                    maxlength: 255
                },
                telefon2: {
                    digits: true,
                    maxlength: 50
                },
                fax: {
                    digits: true,
                    maxlength: 50
                },
                email: {
                    email: true,
                    maxlength: 255
                },
                web_stranica: {
                    string: true,
                    maxlength: 255
                },
                adresa: {
                    string: true,
                    maxlength: 255
                },
                fb: {
                    string: true,
                    maxlength: 255
                },
                instagram: {
                    string: true,
                    maxlength: 255
                },
                twitter: {
                    string: true,
                    maxlength: 255
                },
                yt: {
                    string: true,
                    maxlength: 255
                },
                video: {
                    string: true,
                    maxlength: 255
                },
                vremeplov : {
                    string: true
                },
                'galerija[]' : {
                    extension: 'png|jpg|jpeg'
                }
            }
        });

    // Dodavanje kluba - Dodaj ličnost
    $('#dodajLicnost').on('click', function () {
        var licnost_form_input = '<div class="row licnostHover"><div class="izbrisiLicnost"><i class="fa fa-times-circle-o"></i></div>' +
            '<div class="row identitet-style">' +
            '<div class="col-md-6 objavi-klub-logo-setup">' +
            '<div class="col-md-7">' +
            '<div class="alc-staff__photo">' +
            '<img class="slika-edit-profil" src="/images/default_avatar.png" alt="">' +
            '</div>' +
            '</div>' +
            '<div class="col-md-5 sadrzaj-slike">' +
            '<p class="dodaj-sliku-naslov klub-a1">Slika ličnosti</p>' +
            '<p class="dodaj-sliku-call">Odaberite sliku za istaknutu ličnost</p>' +
            '<label class="btn btn-default btn-xs btn-file dodaj-sliku-button">' +
            'Odaberi sliku... <input type="file" name="licnost[' + licnostiCount + '][avatar]" accept="image/*" style="display: none;" onchange="previewFile(\'all\', \'slika-edit-profil1\')">' +
            '</label>' +
            '<div class="info001">' +
            '<p class="info-upload-slike">Preporučene dimenzije za sliku ličnosti:</p>' +
            '<p class="info-upload-slike">Minimalno: 312x250 px</p>' +
            '<p class="info-upload-slike">Maksimalno: 1920x1080 px</p>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div class="col-md-6">' +
            '<div class="form-group col-md-6 col-xs-12">' +
            '<label for="ime-kluba"><img class="flow-icons-013" src="/images/icons/edit.svg"> Ime</label>' +
            '<input type="text" name="licnost[' + licnostiCount + '][ime]" class="form-control" placeholder="Unesite ime ličnosti">' +
            '</div>' +
            '<div class="form-group col-md-6 col-xs-12">' +
            '<label for="ime-kluba"><img class="flow-icons-013" src="/images/icons/edit.svg"> Prezime</label>' +
            '<input type="text" name="licnost[' + licnostiCount + '][prezime]" class="form-control" placeholder="Unesite prezime ime ličnosti">' +
            '</div>' +
            '<div class="form-group col-md-12">' +
            '<label for="opis"><img class="flow-icons-013" src="/images/icons/edit.svg"> Opis i uloga</label>' +
            '<textarea class="form-control" rows="4" name="licnost[' + licnostiCount + '][opis]" placeholder="Upišite kratak opis uloge i funkcije navedene ličnosti u klubu..."></textarea>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>';

        $(licnost_form_input).appendTo('#tab-licnosti #licnostiLista').hide().slideDown();
        licnostiCount++;

        var licnost = $('#createNewClub').find('input[name^="licnost"]');

        licnost.filter('input[name$="[ime]"]').each(function() {
            $(this).rules("add", {
                required: true,
                string: true,
                maxlength: 255
            });
        });

        licnost.filter('input[name$="[prezime]"]').each(function() {
            $(this).rules("add", {
                required: true,
                string: true,
                maxlength: 255
            });
        });

        licnost.filter('input[name$="[opis]"]').each(function() {
            $(this).rules("add", {
                string: true,
                maxlength: 1000
            });
        });

        licnost.filter('input[name$="[avatar]"]').each(function() {
            $(this).rules("add", {
                extension: 'png|jpg|jpeg'
            });
        });
    });

    // Dodavanje kluba - Obriši ličnost
    $('#licnostiLista').on('click', '.izbrisiLicnost',function () {
        $(this).closest('.licnostHover').slideUp('normal', function() { $(this).remove(); } );
    });

    // Dodavanje kluba - Dodaj nagradu
    $('#dodajNagradu').on('click', function () {
       var nagrada_form_input = '<div class="row nagradaHover"><div class="izbrisiNagradu"><i class="fa fa-times-circle-o"></i></div><div class="col-md-6">' +
           '<div class="form-group col-md-6">' +
           '<label for="vrsta-nagrade"><img class="flow-icons-013" src="/images/icons/medalja.svg"> Vrsta nagrade</label>' +
           '<select name="nagrada[' + nagradeCount + '][vrsta]" class="form-control">' +
           '<option value="" selected>Izaberite vrstu osvojene nagrade</option>' +
           '<option value="Medalja">Medalja</option>' +
           '<option value="Trofej/Pehar">Trofej/Pehar</option>' +
           '<option value="Priznanje">Priznanje</option>' +
           '<option value="Plaketa">Plaketa</option>' +
           '</select>' +
           '</div>' +
           '<div class="form-group col-md-6">' +
           '<label for="tip-nagrade"><img class="flow-icons-013" src="/images/icons/medalja.svg"> Tip nagrade</label>' +
           '<select name="nagrada[' + nagradeCount + '][tip]" class="form-control">' +
           '<option value="" selected>Izaberite tip nagrade</option>' +
           '<option value="Zlato">Zlato (1. mjesto)</option>' +
           '<option value="Srebro">Srebro (2. mjesto)</option>' +
           '<option value="Bronza">Bronza (3. mjesto)</option>' +
           '<option value="Ostalo">Ostalo</option>' +
           '</select>' +
           '</div>' +
           '<div class="form-group col-md-12">' +
           '<label for="tip-nagrade"><img class="flow-icons-013" src="/images/icons/medalja.svg"> Nivo takmičenja</label>' +
           '<select name="nagrada[' + nagradeCount + '][nivo]" class="form-control">' +
           '<option value="" selected>Izaberite nivo takmičenja</option>' +
           '<option value="Internacionalni nivo">Internacionalni nivo</option>' +
           '<option value="Regionalni nivo">Regionalni nivo</option>' +
           '<option value="Državni nivo">Državni nivo</option>' +
           '<option value="Entitetski nivo">Entitetski nivo</option>' +
           '<option value="Drugo">Drugo</option>' +
           '</select>' +
           '</div>' +
           '</div>' +
           '<div class="col-md-6">' +
           '<div class="form-group">' +
           '<label for="takmicenje"><img class="flow-icons-013" src="/images/icons/trophy.svg"> Naziv takmičenja</label>' +
           '<input type="text" name="nagrada[' + nagradeCount + '][takmicenje]" class="form-control" placeholder="Unesite naziv takmicenja za koje je osvojena nagrada">' +
           '</div>' +
           '<div class="form-group col-md-6 col-xs-12">' +
           '<label for="sezona"><img class="flow-icons-013" src="/images/icons/small-calendar.svg"> Sezona/Godina</label>' +
           '<input type="text" name="nagrada[' + nagradeCount + '][sezona]" class="form-control" placeholder="Unesite Sezonu/Godinu osvajanja trofeja">' +
           '</div>' +
           '<div class="form-group col-md-6 col-xs-12">' +
           '<label for="osvajanja"><img class="flow-icons-013" src="/images/icons/the-sum-of.svg"> Broj osvajanja</label>' +
           '<input type="number" name="nagrada[' + nagradeCount + '][osvajanja]" class="form-control" placeholder="Unesite broj osvajanja trofeja">' +
           '</div>' +
           '</div>' +
           '</div>';

        $(nagrada_form_input).appendTo('#tab-vitrina #nagradeLista').hide().slideDown();
        nagradeCount++;

        var nagrada = $('#createNewClub').find('input[name^="nagrada"], select[name^="nagrada"]');

        nagrada.filter('select[name$="[vrsta]"]').each(function() {
            $(this).rules("add", {
                required: true,
                string: true,
                maxlength: 255
            });
        });

        nagrada.filter('select[name$="[tip]"]').each(function() {
            $(this).rules("add", {
                required: true,
                string: true,
                maxlength: 255
            });
        });

        nagrada.filter('select[name$="[nivo]"]').each(function() {
            $(this).rules("add", {
                required: true,
                string: true,
                maxlength: 255
            });
        });

        nagrada.filter('input[name$="[takmicenje]"]').each(function() {
            $(this).rules("add", {
                required: true,
                string: true,
                maxlength: 255
            });
        });

        nagrada.filter('input[name$="[sezona]"]').each(function() {
            $(this).rules("add", {
                required: true,
                string: true,
                maxlength: 9
            });
        });

        nagrada.filter('input[name$="[osvajanja]"]').each(function() {
            $(this).rules("add", {
                digits: true
            });
        });
    });

    // Dodavanje kluba - Obriši nagradu
    $('#nagradeLista').on('click', '.izbrisiNagradu',function () {
        $(this).closest('.nagradaHover').slideUp('normal', function() { $(this).remove(); } );
    });

    $('#tip-kluba').change(function () {
        var _tipkluba = $(this).val();
        if (_tipkluba == "Sportski klub") {
            $('#sportoviDiv').css({"display": "block"});
            $('#iSportoviDiv').css({"display": "none"});
        } else {
            $('#sportoviDiv').css({"display": "none"});
            $('#iSportoviDiv').css({"display": "block"});
        }
    });

    var date_input = $('input[name="date"]'); //our date input has the name "date"
    var container = $('form').length > 0 ? $('form').parent() : "body";
    var options = {
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
    };
    date_input.datepicker(options);

    var date_input = $('input[name="dob"]'); //our date input has the name "date"
    var container = $('form').length > 0 ? $('form').parent() : "body";
    var options = {
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
        }
    }
);
$('#settingsUpdateUser').validate({
        rules: {
            avatar: {
                extension: 'png|jpg|jpeg'
            }
        }
    }
);


$('#createNewDvorana').validate({
    rules: {
        profilna: {
            extension: 'png|jpg|jpeg'
        },
        naziv: {
            required: true
        },
        kontinent: {
            required: true,
        },
        drzava: {
            required: true,
        },
        entitet: {
            required: true,
        },
        kanton: {
            required: true,
        },
        grad: {
            required: true,
        },

    }
});
$('.loginFormaVer').validate({
    rules: {
        name: {
            required: true,
        },
        password: {
            required: true,
        }
    }
});
$('#createNewFootballer').validate({
    rules: {
        logo: {
            extension: 'png|jpg|jpeg'
        },
        ime: {
            required: true,
        },
        prezime: {
            required: true,
        },
        karakter: {
            required: true,
        },
        drzava: {
            required: true,
        },
        entitet: {
            required: true,
        },
        kanton: {
            required: true,
        },
        klub: {
            required: true,
        },
        visina: {
            required: true,
        },
        tezina: {
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

/*$('.prvi_korak_end').on('click', function(){
  $('#createNewClub').valid();
  return false;
});*/

/*$('.btn-dalje').on('click', function(){
  $('#createNewFootballer').valid();
});*/
$('.prvi_korak_end_obj').click(function () {
    $('#createNewDvorana').valid();
    if ($('#createNewDvorana').validate().errorList.length < 1) {
        $('.nav-product-tabs li').removeClass('active');

        $('.preslic').closest('li').addClass('active');
        $('.tab-pane').removeClass('active');
        $('.tab-pane').removeClass('in');
        $('#tab-predispozicije').addClass('in');
        $('#tab-predispozicije').addClass('active');

        var sledeci = $('.nav-product-tabs').find('.preslic');
        $('.nav-product-tabs li').removeClass('active');

        sledeci.addClass('active');
        return false;
    }
});
$('.btn-dalje').on('click', function () {
    if ($(this).closest('form').valid()) {
        var sledeci = $('.nav-product-tabs').find('.active').next();
        console.log(sledeci);
        var sljedeci_tab = $('.tab-pane.active').next();
        console.log(sljedeci_tab);

        $('.nav-product-tabs li').removeClass('active');
        $('.tab-pane').removeClass('active in');

        sljedeci_tab.addClass('active in');
        sledeci.addClass('active');
    }
});

$('.btn-nazad').on('click', function () {
    var prethodni = $('.nav-product-tabs').find('.active').prev();
    $('.nav-product-tabs li').removeClass('active');

    prethodni.addClass('active');
});
$('.btn-prijava').on('click', function () {
    $('.loginFormaVer').valid();
    if ($('.loginFormaVer').validate().errorList.length < 1) {
        $('.loginFormaVer').submit();
    } else {
        return false;
    }
});

$('.prvi_korak_end').click(function () {
    var form = $('#createNewClub');

    if (form.valid()) {
        $('.nav-product-tabs li').removeClass('active');

        $('.preslic').closest('li').addClass('active');
        $('.tab-pane').removeClass('active');
        $('.tab-pane').removeClass('in');
        $('#tab-licnosti').addClass('in');
        $('#tab-licnosti').addClass('active');
    }
    /*if($('#createNewClub').length == 0){
      $('#createNewFootballer').valid();
      if($('#createNewFootballer').validate().errorList.length < 1){
        $('.nav-product-tabs li').removeClass('active');

        $('.preslic').closest('li').addClass('active');
        $('.tab-pane').removeClass('active');
        $('.tab-pane').removeClass('in');
        $('#tab-predispozicije').addClass('in');
        $('#tab-predispozicije').addClass('active');
      }
    }else{
       $('#createNewClub').valid();
    if($('#createNewClub').validate().errorList.length < 1){
      $('.nav-product-tabs li').removeClass('active');

      $('.preslic').closest('li').addClass('active');
      $('.tab-pane').removeClass('active');
      $('.tab-pane').removeClass('in');
      $('#tab-licnosti').addClass('in');
      $('#tab-licnosti').addClass('active');
    }
    }

    return false; */
});


/*$('.bt-zavrsi').click(function(){
  $('#createNewClub').valid();
  if($('#createNewClub').validate().errorList.length > 1){
    return false;
  }else{
    $('#createNewClub').submit();
  }
});*/
jQuery.extend(jQuery.validator.messages, {
    required: "Ovo polje je obavezno.",
    remote: "Please fix this field.",
    email: "Unesite validnu e-mail adresu.",
    url: "Please enter a valid URL.",
    date: "Unesite validan datum",
    dateISO: "Please enter a valid date (ISO).",
    number: "Unesite validan broj.",
    digits: "Ovo polje može sadržati samo cifre.",
    creditcard: "Please enter a valid credit card number.",
    equalTo: "Unesite istu vrijednost.",
    accept: "Please enter a value with a valid extension.",
    maxlength: jQuery.validator.format("Unesite manje od {0} karaktera."),
    minlength: jQuery.validator.format("Unesite najmanje {0} karaktera."),
    rangelength: jQuery.validator.format("Unesite između {0} i {1} karaktera."),
    range: jQuery.validator.format("Molimo Vas unseite broj između {0} i {1}."),
    max: jQuery.validator.format("Molimo vas unesite manji broj ili broj {0}."),
    min: jQuery.validator.format("Molimo vas unserite veći broj ili broj {0}.")
});