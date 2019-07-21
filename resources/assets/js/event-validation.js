let validator = $('#createNewEvent').validate({
    ignore: ':hidden,:disabled',
    rules: {
        image: {
            required: true,
            extension: 'png|jpg|jpeg'
        },
        name: {
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
        date_start: {
            required: true,
            date: true
        },
        time_start: {
            required: true
        },
        event_type_id: {
            required: true,
            digits: true
        },
        max_participants: {
            digits: true,
            range: [1, 10000]
        },
        registration_fee: {
            required: true,
            number: true,
            range: [1, 1000]
        },
        first_place_award: {
            required: true,
            number: true,
            range: [1, 100000]
        },
        duration: {
            digits: true,
            range: [1, 50]
        },
        description: {
            string: true,
            maxlength: 2000
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
