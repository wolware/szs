// Globalne varijable
var licnostiCount = 1;
var nagradeCount = 1;
var historyCount = 1;

function previewFile(name, place, maxHeight, maxWidth, minHeight, minWidth) {
    if (typeof(maxHeight) === 'undefined') maxHeight = null;
    if (typeof(maxWidth) === 'undefined') maxWidth = null;
    if (typeof(minHeight) === 'undefined') minHeight = null;
    if (typeof(minWidth) === 'undefined') minWidth = null;


    var preview = $(place);
    var file_input = $(name);
    var file = $(name).get(0).files;
    var error = file_input.closest('.sadrzaj-slike').find('.info-upload-slike');
    console.log(error);
    var reader = new FileReader();

    reader.onloadend = function (e) {
        preview.attr('src', e.target.result);

        var image = new Image();
        image.src = e.target.result;

        image.onload = function () {
            var height = this.height;
            var width = this.width;

            if(maxHeight && maxWidth && minHeight && minWidth) {
                if ((height >= maxHeight || height <= minHeight) || (width >= maxWidth || width <= minWidth)) {
                    error.animate({
                        'color': 'red'
                    });
                    return false;
                }

                error.animate({
                    'color': 'green'
                });
                return true;
            } else if (maxHeight && maxWidth) {
                if (height >= maxHeight || width >= maxWidth) {
                    error.animate({
                        'color': 'red'
                    });
                    return false;
                }

                error.animate({
                    'color': 'green'
                });
                return true;
            } else if (minHeight && minWidth) {
                if (height <= minHeight || width <= minWidth) {
                    error.animate({
                        'color': 'red'
                    });
                    return false;
                }

                error.animate({
                    'color': 'green'
                });
                return true;
            }
        };
    };

    if (file.length > 0) {
        reader.readAsDataURL(file[0]);
    } else {
        preview.attr('src', '');

        error.animate({
            'color': 'red'
        });
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

        $('#galerija_prikaz').html('');

        if (input["0"].files) {
            var filesAmount = input["0"].files.length;
            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                reader.onloadend = function (event) {
                    if (prvi === 0) {
                        var adnew = '<div class="album__item col-xs-6 col-sm-3"><div class="album__item-holder"><a href="' + event.target.result + '" class="album__item-link mp_gallery"><figure class="album__thumb"><img src="' + event.target.result + '" alt=""></figure><div class="album__item-desc"><img src="/images/icons/expand-square.svg" class="pregled-slike" alt=""></div></a></div><div class="progress-stats upload-slike-statust-bar"><div class="progress"><div class="progress__bar progress__bar-width-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div></div></div></div>';
                        $('#galerija_prikaz').append(adnew);

                    }
                };

                reader.readAsDataURL(input["0"].files[i]);
            }
        }

    });

    $('.galerija_edit').on('change', function () {
        imagesPreview(this);
    });
});

$.validator.setDefaults({ ignore: '' });

$(document).ready(function () {
    $('#flash-overlay-modal').modal();

    $('#editClubForm').validate({
        ignore: ':hidden,:disabled',
        rules: {
            logo: {
                extension: 'png|jpg|jpeg'
            },
            name: {
                required: true,
                string: true,
                maxlength: 255
            },
            nature: {
                required: true,
                string: true,
                maxlength: 255
            },
            continent: {
                required: true,
                digits: true
            },
            country: {
                required: true,
                digits: true
            },
            province: {
                required: true,
                digits: true
            },
            region: {
                required: true,
                digits: true
            },
            municipality: {
                required: true,
                digits: true
            },
            city: {
                required: true,
                string: true,
                maxlength: 255
            },
            type: {
                required: true,
                digits: true
            },
            sport: {
                required: true,
                digits: true
            },
            category: {
                required: true,
                digits: true
            },
            established_in: {
                digits: true,
                range: [1800, new Date().getFullYear()]
            },
            home_field: {
                string: true,
                maxlength: 255
            },
            competition: {
                string: true,
                maxlength: 255
            },
            association: {
                required: true,
                digits: true
            },
            phone_1: {
                digits: true,
                maxlength: 255
            },
            phone_2: {
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
            website: {
                string: true,
                maxlength: 255
            },
            address: {
                string: true,
                maxlength: 255
            },
            facebook: {
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
            youtube: {
                string: true,
                maxlength: 255
            },
            video: {
                string: true,
                maxlength: 255
            }
        }
    });

    $('#editLicnosti').validate({
        ignore: ':hidden,:disabled'
    });

    // Validacije forme za dodavanje kluba
    $('#createNewClub').validate({
        ignore: ':hidden,:disabled',
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
            nature: {
                required: true,
                string: true,
                maxlength: 255
            },
            continent: {
                required: true,
                digits: true
            },
            country: {
                required: true,
                digits: true
            },
            province: {
                required: true,
                digits: true
            },
            region: {
                required: true,
                digits: true
            },
            municipality: {
                required: true,
                digits: true
            },
            city: {
                required: true,
                string: true,
                maxlength: 255
            },
            type: {
                required: true,
                digits: true
            },
            sport: {
                required: true,
                digits: true
            },
            category: {
                required: true,
                digits: true
            },
            established_in: {
                digits: true,
                range: [1800, new Date().getFullYear()]
            },
            home_field: {
                string: true,
                maxlength: 255
            },
            competition: {
                string: true,
                maxlength: 255
            },
            association: {
                required: true,
                digits: true
            },
            phone_1: {
                digits: true,
                maxlength: 255
            },
            phone_2: {
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
            website: {
                string: true,
                maxlength: 255
            },
            address: {
                string: true,
                maxlength: 255
            },
            facebook: {
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
            youtube: {
                string: true,
                maxlength: 255
            },
            video: {
                string: true,
                maxlength: 255
            },
            history: {
                string: true
            },
            'galerija[]' : {
                extension: 'png|jpg|jpeg'
            }
        }
    });

    $('#editClubHistory').validate({
        ignore: ':hidden,:disabled',
        rules: {
            history: {
                string: true
            }
        }
    });

    $('#editClubTrophies').validate({
        ignore: ':hidden,:disabled'
    });

    $('#editClubGallery').validate({
        ignore: ':hidden',
        'galerija[]': {
            extension: "jpg|jpeg|png"
        }
    });

    $('#createNewPlayer').validate({
        ignore: ':hidden,:disabled',
        rules: {
            avatar: {
                extension: 'png|jpg|jpeg'
            },
            firstname: {
                required: true,
                string: true,
                maxlength: 255
            },
            lastname: {
                required: true,
                string: true,
                maxlength: 255
            },
            player_nature: {
                required: true,
                digits: true
            },
            continent: {
                required: true,
                digits: true
            },
            country: {
                required: true,
                digits: true
            },
            province: {
                required: true,
                digits: true
            },
            region: {
                required: true,
                digits: true
            },
            municipality: {
                required: true,
                digits: true
            },
            city: {
                required: true,
                string: true,
                maxlength: 255
            },
            facebook: {
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
            youtube: {
                string: true,
                maxlength: 255
            },
            video: {
                string: true,
                maxlength: 255
            },
            requested_club: {
                digits: true
            },
            weight: {
                number: true
            },
            height: {
                number: true
            },
            preferred_leg: {
                string: true,
                maxlength: 255
            },
            preferred_arm: {
                string: true,
                maxlength: 255
            },
            rank: {
                digits: true
            },
            discipline: {
                string: true,
                maxlength: 255
            },
            best_result: {
                number: true
            },
            agent: {
                string: true,
                maxlength: 255
            },
            position: {
                string: true,
                maxlength: 255
            },
            competition: {
                string: true,
                maxlength: 255
            },
            category: {
                string: true,
                maxlength: 255
            },
            market_value: {
                digits: true
            },
            branch: {
                string: true,
                maxlength: 255
            },
            belt: {
                string: true,
                maxlength: 255
            },
            stlye: {
                string: true,
                maxlength: 255
            },
            distance: {
                digits: true
            },
            coach: {
                string: true,
                maxlength: 255
            },
            best_rank: {
                digits: true
            },
            biography: {
                string: true
            },
            'galerija[]': {
                extension: "jpg|jpeg|png"
            }
        }
    });

    $('#editPlayerGeneral').validate({
        ignore: ':hidden,:disabled',
        rules: {
            avatar: {
                extension: 'png|jpg|jpeg'
            },
            firstname: {
                required: true,
                string: true,
                maxlength: 255
            },
            lastname: {
                required: true,
                string: true,
                maxlength: 255
            },
            player_nature: {
                required: true,
                digits: true
            },
            continent: {
                required: true,
                digits: true
            },
            country: {
                required: true,
                digits: true
            },
            province: {
                required: true,
                digits: true
            },
            region: {
                required: true,
                digits: true
            },
            municipality: {
                required: true,
                digits: true
            },
            city: {
                required: true,
                string: true,
                maxlength: 255
            },
            facebook: {
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
            youtube: {
                string: true,
                maxlength: 255
            },
            video: {
                string: true,
                maxlength: 255
            }
        }
    });

    $('#editPlayerStatus').validate({
        ignore: ':hidden,:disabled',
        rules: {
            requested_club: {
                digits: true
            },
            weight: {
                number: true
            },
            height: {
                number: true
            },
            preferred_leg: {
                string: true,
                maxlength: 255
            },
            preferred_arm: {
                string: true,
                maxlength: 255
            },
            rank: {
                digits: true
            },
            discipline: {
                string: true,
                maxlength: 255
            },
            best_result: {
                number: true
            },
            agent: {
                string: true,
                maxlength: 255
            },
            position: {
                string: true,
                maxlength: 255
            },
            competition: {
                string: true,
                maxlength: 255
            },
            category: {
                string: true,
                maxlength: 255
            },
            market_value: {
                digits: true
            },
            branch: {
                string: true,
                maxlength: 255
            },
            belt: {
                string: true,
                maxlength: 255
            },
            stlye: {
                string: true,
                maxlength: 255
            },
            distance: {
                digits: true
            },
            coach: {
                string: true,
                maxlength: 255
            },
            best_rank: {
                digits: true
            }
        }
    });

    $('#editPlayerBiography').validate({
        ignore: ':hidden,:disabled',
        rules: {
            biography: {
                string: true
            }
        }
    });

    $('#editPlayerTrophies').validate({
        ignore: ':hidden,:disabled'
    });

    $('#editPlayerGallery').validate({
        ignore: ':hidden',
        rules: {
            'galerija[]': {
                extension: "jpg|jpeg|png"
            }
        }
    });

    $('#createNewStaff').validate({
        ignore: ':hidden,:disabled',
        rules: {
            avatar: {
                extension: 'png|jpg|jpeg'
            },
            firstname: {
                required: true,
                string: true,
                maxlength: 255
            },
            lastname: {
                required: true,
                string: true,
                maxlength: 255
            },
            profession: {
                required: true,
                digits: true
            },
            continent: {
                required: true,
                digits: true
            },
            country: {
                required: true,
                digits: true
            },
            province: {
                required: true,
                digits: true
            },
            region: {
                required: true,
                digits: true
            },
            municipality: {
                required: true,
                digits: true
            },
            city: {
                required: true,
                string: true,
                maxlength: 255
            },
            facebook: {
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
            youtube: {
                string: true,
                maxlength: 255
            },
            video: {
                string: true,
                maxlength: 255
            },
            requested_club: {
                digits: true
            },
            club_name: {
                string: true,
                maxlength: 255
            },
            education: {
                string: true,
                maxlength: 255
            },
            additional_education: {
                string: true,
                maxlength: 255
            },
            number_of_certificates: {
                digits: true
            },
            number_of_projects: {
                digits: true
            },
            work_experience: {
                number: true
            },
            biography: {
                string: true
            },
            'galerija[]': {
                extension: "jpg|jpeg|png"
            }
        }
    });

    $('#editStaffGeneral').validate({
        ignore: ':hidden,:disabled',
        rules: {
            avatar: {
                extension: 'png|jpg|jpeg'
            },
            firstname: {
                required: true,
                string: true,
                maxlength: 255
            },
            lastname: {
                required: true,
                string: true,
                maxlength: 255
            },
            profession: {
                required: true,
                digits: true
            },
            continent: {
                required: true,
                digits: true
            },
            country: {
                required: true,
                digits: true
            },
            province: {
                required: true,
                digits: true
            },
            region: {
                required: true,
                digits: true
            },
            municipality: {
                required: true,
                digits: true
            },
            city: {
                required: true,
                string: true,
                maxlength: 255
            },
            facebook: {
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
            youtube: {
                string: true,
                maxlength: 255
            },
            video: {
                string: true,
                maxlength: 255
            }
        }
    });

    $('#editStaffStatus').validate({
        ignore: ':hidden,:disabled',
        rules: {
            requested_club: {
                digits: true
            },
            club_name: {
                string: true,
                maxlength: 255
            },
            education: {
                string: true,
                maxlength: 255
            },
            additional_education: {
                string: true,
                maxlength: 255
            },
            number_of_certificates: {
                digits: true
            },
            number_of_projects: {
                digits: true
            },
            work_experience: {
                number: true
            }
        }
    });

    $('#editStaffBiography').validate({
        ignore: ':hidden,:disabled',
        rules: {
            biography: {
                string: true
            }
        }
    });

    $('#editStaffTrophies').validate({
        ignore: ':hidden,:disabled'
    });

    $('#editStaffGallery').validate({
        ignore: ':hidden',
        rules: {
            'galerija[]': {
                extension: "jpg|jpeg|png"
            }
        }
    });

    addLicnostValidation();
    addTrophyValidation();
    addHistoryValidation();

    // Select boxovi za regione
    var continentSelect = $('select#continent');
    var countrySelect = $('select#country');
    var provinceSelect = $('select#province');
    var regionSelect = $('select#region');
    var municipalitySelect = $('select#municipality');

    // Select boxes
    var sportTypeSelect = $('select#club-type');
    var sportSelect = $('select#sport');
    var associationBox = $('#associations');
    var associationRadio = $('input[name="association"]');

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

    // Nadji najveci array key od old inputa za klub/historija ako postoji
    if($('.historyHover').length) {
        var num2 = $('.historyHover').map(function() {
            return $(this).data('key');
        }).get();

        var highest2 = Math.max.apply(Math, num2);

        historyCount = highest2 + 1;
    }

    // Custom metode za validaciju
    // Provjera stringa
    jQuery.validator.addMethod("string", function(value, element){
        if (typeof value === 'string' || value instanceof String) {
            return true;
        }
        return false;
    }, "Polje mora biti tipa string.");

    // Dodavanje kluba - Dodaj ličnost
    $('#dodajLicnost').on('click', function () {
        var licnost_form_input = '<div class="row licnostHover"><div class="izbrisiLicnost"><i class="fa fa-times-circle-o"></i></div>' +
            '<div class="row identitet-style">' +
            '<div class="col-md-6 objavi-klub-logo-setup">' +
            '<div class="col-md-7">' +
            '<div class="alc-staff__photo">' +
            '<img class="slika-edit-profil" id="slika-licnost-prikaz' + licnostiCount + '" src="/images/default_avatar.png" alt="">' +
            '</div>' +
            '</div>' +
            '<div class="col-md-5 sadrzaj-slike">' +
            '<p class="dodaj-sliku-naslov klub-a1">Slika ličnosti</p>' +
            '<p class="dodaj-sliku-call">Odaberite sliku za istaknutu ličnost</p>' +
            '<label class="btn btn-default btn-xs btn-file dodaj-sliku-button">' +
            'Odaberi sliku... <input type="file" name="licnost[' + licnostiCount + '][avatar]" id="licnostAvatar' + licnostiCount + '" accept="image/*" class="not-visible" onchange="previewFile(\'#licnostAvatar' + licnostiCount + '\',\'#slika-licnost-prikaz' + licnostiCount + '\', 1080, 1920, 250, 312)">' +
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

        addLicnostValidation();
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

        addTrophyValidation();
    });

    // Dodavanje kluba - Obriši nagradu
    $('#nagradeLista').on('click', '.izbrisiNagradu',function () {
        $(this).closest('.nagradaHover').slideUp('normal', function() { $(this).remove(); } );
    });

    // Dodavanje kluba - Promjena kontinenta
    continentSelect.on('change', function () {
        var itemsToShow = countrySelect.children("option[data-parent^=" + continentSelect.val() + "]");

        if(itemsToShow.length > 0) {
            countrySelect.prop('disabled', false);
            countrySelect.children('option').hide();
            countrySelect.children('option:first').show();
            itemsToShow.show();
        } else {
            countrySelect.children('option:first').show();
            countrySelect.prop('disabled', 'disabled');
        }
        // Resetuj sve selecte poslije ovog
        countrySelect.prop("selectedIndex", 0);
        provinceSelect.prop("selectedIndex", 0).prop('disabled', 'disabled');
        regionSelect.prop("selectedIndex", 0).prop('disabled', 'disabled');
        municipalitySelect.prop("selectedIndex", 0).prop('disabled', 'disabled');
    });

    // Dodavanje kluba - Promjena države
    countrySelect.on('change', function () {
        var itemsToShow = provinceSelect.children("option[data-parent^=" + countrySelect.val() + "]");

        if(itemsToShow.length > 0) {
            provinceSelect.prop('disabled', false);
            provinceSelect.children('option').hide();
            provinceSelect.children('option:first').show();
            itemsToShow.show();
        } else {
            provinceSelect.children('option:first').show();
            provinceSelect.prop('disabled', 'disabled');
        }
        // Resetuj sve selecte poslije ovog
        provinceSelect.prop("selectedIndex", 0);
        regionSelect.prop("selectedIndex", 0).prop('disabled', 'disabled');
        municipalitySelect.prop("selectedIndex", 0).prop('disabled', 'disabled');

        // Izlistaj sve saveze države ako postoje
        var associationsToShow = associationBox.find("input[data-region^=" + countrySelect.val() + "]");
        console.log(associationsToShow);
        associationRadio.prop('checked', false);

        if(associationsToShow.length > 0) {
            associationRadio.closest('label').hide();
            associationsToShow.closest('label').css('display', 'inline-block');
            associationBox.show();
        } else {
            associationBox.hide();
        }

    });

    // Dodavanje kluba - Promjena pokrajine
    provinceSelect.on('change', function () {
        var itemsToShow = regionSelect.children("option[data-parent^=" + provinceSelect.val() + "]");

        if(itemsToShow.length > 0) {
            regionSelect.prop('disabled', false);
            regionSelect.children('option').hide();
            regionSelect.children('option:first').show();
            itemsToShow.show();
        } else {
            regionSelect.children('option:first').show();
            regionSelect.prop('disabled', 'disabled');
        }

        // Resetuj sve selecte poslije ovog
        regionSelect.prop("selectedIndex", 0);
        municipalitySelect.prop("selectedIndex", 0).prop('disabled', 'disabled');
    });

    // Dodavanje kluba - Promjena regije
    regionSelect.on('change', function () {
        var itemsToShow = municipalitySelect.children("option[data-parent^=" + regionSelect.val() + "]");

        if(itemsToShow.length > 0) {
            municipalitySelect.prop('disabled', false);
            municipalitySelect.children('option').hide();
            municipalitySelect.children('option:first').show();
            itemsToShow.show();
        } else {
            municipalitySelect.children('option:first').show();
            municipalitySelect.prop('disabled', 'disabled');
        }

        // Resetuj sve selecte poslije ovog
        municipalitySelect.prop("selectedIndex", 0);
    });

    // Selekt za sportove
    sportTypeSelect.on('change', function () {
        var itemsToShow;
        if(sportTypeSelect.val() == 1 || sportTypeSelect.val() == 2) {
           if(sportTypeSelect.val() == 1) {
               itemsToShow = sportSelect.children("option[data-disabled^='0']");
           } else if (sportTypeSelect.val() == 2) {
               itemsToShow = sportSelect.children("option[data-disabled^='1']");
           }
           sportSelect.prop('selectedIndex', 0);
           sportSelect.prop('disabled', false);
           sportSelect.children('option').hide();
           sportSelect.children('option:first').show();
           itemsToShow.show();
        } else {
            sportSelect.prop('disabled', 'disabled');
        }
    });

    // Dodavanje kluba - Dodaj ličnost
    $('#dodajHistory').on('click', function () {
        var history_form_input = '<div class="row historyHover">' +
            '<div class="izbrisiHistory"><i class="fa fa-times-circle-o"></i></div>' +
            '<div class="row form-objavi-klub-01">' +
            '<div class="form-group col-md-6">' +
            '<label><img class="flow-icons-013" src="/images/icons/klubovi-icon.svg"> Sezona</label>' +
            '<input type="text" name="history[' + historyCount + '][season]" class="form-control" placeholder="npr. 2015-2016">' +
            '</div>' +
            '<div class="form-group col-md-6">' +
            '<label><img class="flow-icons-013" src="/images/icons/klubovi-icon.svg"> Klub</label>' +
            '<input type="text" name="history[' + historyCount + '][club]" class="form-control" placeholder="Unesite ime kluba">' +
            '</div>' +
            '</div>' +
            '</div>';

        $(history_form_input).appendTo('#tab-predispozicije #historijaLista').hide().slideDown();
        historyCount++;

        addHistoryValidation();
    });

    // Dodavanje kluba - Obriši ličnost
    $('#historijaLista').on('click', '.izbrisiHistory',function () {
        $(this).closest('.historyHover').slideUp('normal', function() { $(this).remove(); } );
    });

    var date_input1 = $('input[name="date_of_birth"]'); //our date input has the name "date"
    var container1 = "body";
    var options1 = {
        format: 'mm/dd/yyyy',
        container: container1,
        todayHighlight: true,
        autoclose: true,
        maxDate: new Date()
    };
    date_input1.datepicker(options1);

    var date_input = $('input[name="date"]'); //our date input has the name "date"
    var container = $('form').length > 0 ? $('form').parent() : "body";
    var options = {
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
        maxDate: new Date()
    };
    date_input.datepicker(options);

    var date_input2 = $('input[name="dob"]'); //our date input has the name "date"
    var container2 = $('form').length > 0 ? $('form').parent() : "body";
    var options2 = {
        format: 'mm/dd/yyyy',
        container: container2,
        todayHighlight: true,
        autoclose: true,
        maxDate: new Date()
    };
    date_input2.datepicker(options2);
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

$.validator.addMethod('filesize', function (value, element, param) {
    return this.optional(element) || (element.files[0].size <= param)
}, 'File size must be less than {0}');


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
        var sljedeci_tab = $('.tab-pane.active').next();

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
    accept: "Molimo vas da unesete fajl validne ekstenzije.",
    maxlength: jQuery.validator.format("Unesite manje od {0} karaktera."),
    minlength: jQuery.validator.format("Unesite najmanje {0} karaktera."),
    rangelength: jQuery.validator.format("Unesite između {0} i {1} karaktera."),
    range: jQuery.validator.format("Molimo Vas unseite broj između {0} i {1}."),
    max: jQuery.validator.format("Molimo vas unesite manji broj ili broj {0}."),
    min: jQuery.validator.format("Molimo vas unserite veći broj ili broj {0}."),
    extension: "Molimo vas da unesete fajl validne ekstenzije."
});

function addLicnostValidation() {
    var licnost = $('form').find('input[name^="licnost"]');

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
}

function addTrophyValidation() {
    var nagrada = $('form').find('input[name^="nagrada"], select[name^="nagrada"]');

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
            digits: true,
            range: [1800, new Date().getFullYear()]
        });
    });

    nagrada.filter('input[name$="[osvajanja]"]').each(function() {
        $(this).rules("add", {
            digits: true
        });
    });
}

function addGalleryValidation() {
    var gallery = $('form').find('input[name^="galerija"]');

    gallery.each(function() {
        $(this).rules("add", {
            accept: 'image/*'
        });
    });
}

function addHistoryValidation() {
    var history = $('form').find('input[name^="history"]');

    history.filter('input[name$="[season]"]').each(function() {
        $(this).rules("add", {
            required: true,
            string: true,
            maxlength: 255
        });
    });

    history.filter('input[name$="[club]"]').each(function() {
        $(this).rules("add", {
            required: true,
            string: true,
            maxlength: 255
        });
    });
}