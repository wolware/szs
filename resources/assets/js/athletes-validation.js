let validator = $('#createNewPlayer').validate({
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
            string: true,
            maxlength: 255
        },
        agent: {
            string: true,
            lettersonly: true,
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
            lettersonly: true,
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
    },
    invalidHandler: function (form, validator) {
        $('html, body').animate({scrollTop: '500em'}, 300);
    }
});

$('[role="tab"]').click(function (e) {
    var tab = $("#tabs").children(".active");

    var valid = true;
    tab.each(function (activeTab) {
        $('input', activeTab).each(function(i, v){
            if(this.type != "hidden" && this.type != 'file'){
                valid = validator.element(v) && valid;
            }
        });
    });


    if (!valid) {
        e.stopPropagation();
        $('html, body').animate({
            scrollTop: ($('.error').offset().top)
        }, 500);
    }
});
