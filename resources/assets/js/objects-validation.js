let validator = $('#createNewObject').validate({
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
        number_of_fields: {
            digits: true,
            range: [1, 50]
        },
        number_of_pools: {
            digits: true,
            range: [1, 50]
        },
        number_of_tracks: {
            digits: true,
            range: [1, 100]
        },
        number_of_balls: {
            digits: true,
            range: [1, 500]
        },
        number_of_shooting_places: {
            digits: true,
            range: [1, 500]
        },
        type_of_grass: {
            string: true,
            maxlength: 255,
            lettersonly: true
        },
        elevation: {
            digits: true,
            range: [1, 8000]
        },
        stadium_length: {
            digits: true,
            range: [1, 300]
        },
        stadium_width: {
            digits: true,
            range: [1, 300]
        },
        number_of_ski_tracks: {
            digits: true,
            range: [1, 200]
        },
        number_of_ski_lifts: {
            digits: true,
            range: [1, 200]
        },
        water_effects: {
            digits: true,
            range: [0, 1]
        },
        area: {
            digits: true
        },
        water_area: {
            digits: true
        },
        capacity: {
            digits: true
        },
        pool_capacity: {
            digits: true
        },
        stadium_capacity: {
            digits: true
        },
        type_of_field: {
            string: true,
            maxlength: 255,
            lettersonly: true
        },
        wifi: {
            string: true,
            maxlength: 255,
            lettersonly: true
        },
        parking: {
            string: true,
            maxlength: 255,
            lettersonly: true
        },
        restaurant: {
            string: true,
            maxlength: 255,
            lettersonly: true
        },
        hotels: {
            string: true,
            maxlength: 255
        },
        cafe: {
            string: true,
            maxlength: 255,
            lettersonly: true
        },
        access_to_disabled: {
            string: true,
            maxlength: 255,
            lettersonly: true
        },
        number_of_locker_rooms: {
            digits: true,
            range: [0, 50]
        },
        rent_equipment: {
            digits: true,
            range: [0, 1]
        },
        hot_water_showers: {
            digits: true,
            range: [0, 1]
        },
        result_board: {
            digits: true,
            range: [0, 1]
        },
        kids_playground: {
            digits: true,
            range: [0, 1]
        },
        wardrobe_with_key: {
            digits: true,
            range: [0, 1]
        },
        props: {
            digits: true,
            range: [0, 1]
        },
        air_conditioning: {
            digits: true,
            range: [0, 1]
        },
        protective_net: {
            digits: true,
            range: [0, 1]
        },
        optimum_temperature: {
            digits: true,
            range: [0, 1]
        },
        video_surveillance: {
            digits: true,
            range: [0, 1]
        },
        equipment_rent: {
            digits: true,
            range: [0, 1]
        },
        kid_pools: {
            digits: true,
            range: [0, 1]
        },
        entering_a_props: {
            digits: true,
            range: [0, 1]
        },
        urine_detector: {
            digits: true,
            range: [0, 1]
        },
        reservations: {
            digits: true,
            range: [0, 1]
        },
        child_equipment: {
            digits: true,
            range: [0, 1]
        },
        special_shoes: {
            digits: true,
            range: [0, 1]
        },
        hygiene_equipment: {
            digits: true,
            range: [0, 1]
        },
        member_card: {
            digits: true,
            range: [0, 1]
        },
        maintenance_service: {
            digits: true,
            range: [0, 1]
        },
        emergency_intervention: {
            digits: true,
            range: [0, 1]
        },
        skiing_school: {
            digits: true,
            range: [0, 1]
        },
        snowboarding_school: {
            digits: true,
            range: [0, 1]
        },
        skiing_equipment_shops: {
            digits: true,
            range: [0, 1]
        },
        mobile_rescue_team: {
            digits: true,
            range: [0, 1]
        },
        night_skiing: {
            digits: true,
            range: [0, 1]
        },
        commenting_cabins: {
            digits: true,
            range: [0, 1]
        },
        speaker_system: {
            digits: true,
            range: [0, 1]
        },
        fan_shop: {
            digits: true,
            range: [0, 1]
        },
        use_own_equipment: {
            digits: true,
            range: [0, 1]
        },
        equipment_service: {
            digits: true,
            range: [0, 1]
        },
        shooting_school: {
            digits: true,
            range: [0, 1]
        },
        protective_equipment: {
            digits: true,
            range: [0, 1]
        },
        history: {
            string: true
        },
        'galerija[]': {
            extension: 'png|jpg|jpeg'
        },
        'proof[]': {
            required: true,
            extension: 'png|jpg|jpeg'
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
