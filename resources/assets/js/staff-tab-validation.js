let validator = $('#createNewStaff').validate({
    ignore: ':hidden,:disabled',
    rules: {
        avatar: {
            extension: 'png|jpg|jpeg'
        },
        firstname: {
            required: true,
            string: true,
            lettersonly: true,
            maxlength: 255
        },
        lastname: {
            required: true,
            string: true,
            lettersonly: true,
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
    },
    invalidHandler: function (form, validator) {
        $('html, body').animate({scrollTop: '500em'}, 300);
    }
});


$('[role="tab"]').click(function (e) {
    var tab = $("#tabs").children(".active");

    var valid = true;
    tab.each(function (activeTab) {
        $('input', activeTab).each(function (i, v) {
            valid = validator.element(v) && valid;
        });
    });

    if (!valid) {
        e.stopPropagation();
        $('html, body').animate({
            scrollTop: ($('.error').offset().top)
        }, 500);
    }
});
