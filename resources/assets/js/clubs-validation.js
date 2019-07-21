let validator = $('#clubForm').validate({
    ignore: ':hidden,:disabled',
    rules: {
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
        // 'galerijaInput' : {
        //     extension: 'png|jpg|jpeg'
        // },
        // 'proof[]' : {
        //     required: true,
            // extension: 'png|jpg|jpeg'
        // }
    },
    invalidHandler: function(form, validator) {
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

    if(!valid){
        e.stopPropagation();
        $('html, body').animate({
            scrollTop: ($('.error').offset().top)
        },500);
    }
});


