<?php

namespace App\Http\Controllers;

use App\Repositories\ObjectRepository;
use App\Repositories\RegionRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class ObjectController extends Controller
{
    protected $objectRepository;
    protected $regionRepository;

    protected $allAttributeInputs = [
        // General
        'number_of_fields' => 'group:g|label:Broj terena (sala)|type:input|name:number_of_fields|placeholder:Unesite broj terena|icon:field.svg',
        'number_of_pools' => 'group:g|label:Broj bazena|type:input|name:number_of_pools|placeholder:Unesite broj bazena|icon:swimming-pool2.svg',
        'number_of_tracks' => 'group:g|label:Broj staza|type:input|name:number_of_tracks|placeholder:Unesite broj staza|icon:lanes.svg',
        'number_of_balls' => 'group:g|label:Broj kugli|type:input|name:number_of_balls|placeholder:Unesite broj kugli|icon:bowling-ball.svg',
        'number_of_shooting_places' => 'group:g|label:Broj strelišta|type:input|name:number_of_shooting_places|placeholder:Unesite broj strelišta|icon:target1.svg',
        'type_of_grass' => 'group:g|label:Vrsta travnjaka|type:select|name:type_of_grass|options:Prirodna trava,Umjetna trava (plastika)|default:Izaberite vrstu travnjaka|icon:grass.svg',
        'elevation' => 'group:g|label:Nadmorska visina (m)|type:input|name:elevation|placeholder:Unesite nadmorsku visinu u metrima|icon:nadmorska.svg',
        'stadium_length' => 'group:g|label:Dužina terena (m)|type:input|name:stadium_length|placeholder:Unesite dužinu terena|icon:duzina.svg',
        'stadium_width' => 'group:g|label:Širina terena (m)|type:input|name:stadium_width|placeholder:Unesite širinu terena|icon:sirina.svg',
        'number_of_ski_tracks' => 'group:g|label:Ukupno staza|type:input|name:number_of_ski_tracks|placeholder:Unesite broj staza|icon:river-trail.svg',
        'number_of_ski_lifts' => 'group:g|label:Ukupno liftova|type:input|name:number_of_ski_lifts|placeholder:Unesite broj liftova|icon:ski-lift.svg',
        'water_effects' => 'group:g|label:Vodeni efekti|type:select|name:water_effects|options:Da,Ne|default:Odaberite|icon:water-effects.svg',
        'type_of_field' => 'group:g|label:Vrsta podloge|type:select|name:type_of_field|options:Parket,Bitumen,Plastika,Guma,Zemlja,Kombinovano|default:Izaberite vrstu podloge|icon:parquet.svg',
        'area' => 'group:g|label:Površina objekta (m2)|type:input|name:area|placeholder:Unesite ukupnu površinu objekta|icon:scale-screen.svg',
        'water_area' => 'group:g|label:Vodena površina (m2)|type:input|name:water_area|placeholder:Unesite ukupnu vodenu površinu|icon:scale-screen.svg',
        'capacity' => 'group:g|label:Kapacitet korisnika|type:input|name:capacity|placeholder:Unesite kapacitet objekta|icon:gledaoci.svg',
        'pool_capacity' => 'group:g|label:Kapacitet kupača|type:input|name:pool_capacity|placeholder:Unesite kapacitet kupača|icon:swimmer.svg',
        'stadium_capacity' => 'group:g|label:Kapacitet gledaoca|type:input|name:stadium_capacity|placeholder:Unesite kapacitet gledaoca|icon:gledaoci.svg',
        // Additional
        'wifi' => 'group:a|label:Wi-Fi|type:select|name:wifi|options:Besplatan,Uz naplatu,Nema|default:Pristup internetu|icon:wifi.svg',
        'parking' => 'group:a|label:Parking|type:select|name:parking|options:Besplatan,Uz naplatu,Nema|default:Odaberite opciju parking zone|icon:parking-sign.svg',
        'restaurant' => 'group:a|label:Restoran|type:select|name:restaurant|options:U sklopu objekta,U blizini objekta,Nema|default:Lokacija restorana|icon:cutlery.svg',
        'hotels' => 'group:a|label:Hoteli i prenoćišta|type:select|name:hotels|options:Da,Ne|default:Odaberite|icon:bed.svg',
        'cafe' => 'group:a|label:Kafeterija|type:select|name:cafe|options:U sklopu objekta,U blizini objekta,Nema|default:Lokacija kafeterije|icon:coffee-cup.svg',
        'access_to_disabled' => 'group:a|label:Pristup za osobe sa invaliditetom|type:select|name:access_to_disabled|options:Obezbjeđen,Direktno sa platoa,Nije obezbjeđen|default:Odaberite|icon:accessibility-sign.svg',
        'number_of_locker_rooms' => 'group:a|label:Broj svlačionica|type:input|name:number_of_locker_rooms|placeholder:Unesite broj svlačionica|icon:room-key.svg',
        'rent_equipment' => 'group:a|label:Najam opreme|type:select|name:rent_equipment|options:Da,Ne|default:Odaberite|icon:ski-glasses.svg',
        // SZS Attributes
        'hot_water_showers' => 'group:s|label:Tuševi sa toplom vodom|type:select|name:hot_water_showers|options:Da,Ne|default:Odaberite',
        'result_board' => 'group:s|label:Tabla za rezultate|type:select|name:result_board|options:Da,Ne|default:Odaberite',
        'kids_playground' => 'group:s|label:Igraona u sklopu objekta|type:select|name:kids_playground|options:Da,Ne|default:Odaberite',
        'wardrobe_with_key' => 'group:s|label:Ormarić za garderobu sa ključem|type:select|name:wardrobe_with_key|options:Da,Ne|default:Odaberite',
        'props' => 'group:s|label:Rekviziti za rekreaciju i trening|type:select|name:props|options:Da,Ne|default:Odaberite',
        'air_conditioning' => 'group:s|label:Klimatizacija|type:select|name:air_conditioning|options:Da,Ne|default:Odaberite',
        'protective_net' => 'group:s|label:Zaštitne mreže|type:select|name:protective_net|options:Da,Ne|default:Odaberite',
        'optimum_temperature' => 'group:s|label:Optimalna temperatura|type:select|name:optimum_temperature|options:Da,Ne|default:Odaberite',
        'video_surveillance' => 'group:s|label:Video nadzor|type:select|name:video_surveillance|options:Da,Ne|default:Odaberite',
        'equipment_rent' => 'group:s|label:Najam Opreme|type:select|name:equipment_rent|options:Da,Ne|default:Odaberite',
        'kid_pools' => 'group:s|label:Bazeni za djecu|type:select|name:kid_pools|options:Da,Ne|default:Odaberite',
        'entering_a_props' => 'group:s|label:Unos rekvizita (lopte, jastuci...)|type:select|name:entering_a_props|options:Da,Ne|default:Odaberite',
        'urine_detector' => 'group:s|label:Detektor urina|type:select|name:urine_detector|options:Da,Ne|default:Odaberite',
        'reservations' => 'group:s|label:Rezervacije termina|type:select|name:reservations|options:Da,Ne|default:Odaberite',
        'child_equipment' => 'group:s|label:Pomagala za djecu|type:select|name:child_equipment|options:Da,Ne|default:Odaberite',
        'special_shoes' => 'group:s|label:Specijalna obuća|type:select|name:special_shoes|options:Da,Ne|default:Odaberite',
        'hygiene_equipment' => 'group:s|label:Higijenska oprema (čarape)|type:select|name:hygiene_equipment|options:Da,Ne|default:Odaberite',
        'member_card' => 'group:s|label:Članska kartica|type:select|name:member_card|options:Da,Ne|default:Odaberite',
        'maintenance_service' => 'group:s|label:Služba za održavanje|type:select|name:maintenance_service|options:Da,Ne|default:Odaberite',
        'emergency_intervention' => 'group:s|label:Hitna interventna jedinica|type:select|name:emergency_intervention|options:Da,Ne|default:Odaberite',
        'skiing_school' => 'group:s|label:Škola skijanja|type:select|name:skiing_school|options:Da,Ne|default:Odaberite',
        'snowboarding_school' => 'group:s|label:Škola snowboarding-a|type:select|name:snowboarding_school|options:Da,Ne|default:Odaberite',
        'skiing_equipment_shops' => 'group:s|label:Prodavnice skijaške opreme|type:select|name:skiing_equipment_shops|options:Da,Ne|default:Odaberite',
        'mobile_rescue_team' => 'group:s|label:Mobilna spasilačka ekipa|type:select|name:mobile_rescue_team|options:Da,Ne|default:Odaberite',
        'night_skiing' => 'group:s|label:Noćno skijanje|type:select|name:night_skiing|options:Da,Ne|default:Odaberite',
        'commenting_cabins' => 'group:s|label:Komentatorske kabine|type:select|name:commenting_cabins|options:Da,Ne|default:Odaberite',
        'speaker_system' => 'group:s|label:Razglas|type:select|name:speaker_system|options:Da,Ne|default:Odaberite',
        'fan_shop' => 'group:s|label:Fan shop|type:select|name:fan_shop|options:Da,Ne|default:Odaberite',
        'use_own_equipment' => 'group:s|label:Unos vlastite opreme|type:select|name:use_own_equipment|options:Da,Ne|default:Odaberite',
        'equipment_service' => 'group:s|label:Servis opreme|type:select|name:equipment_service|options:Da,Ne|default:Odaberite',
        'shooting_school' => 'group:s|label:Škola streljaštva|type:select|name:shooting_school|options:Da,Ne|default:Odaberite',
        'protective_equipment' => 'group:s|label:Zaštitna oprema|type:select|name:protective_equipment|options:Da,Ne|default:Odaberite',
    ];

    protected $objectCommonValidationRules = [
        'image' => 'required|image|dimensions:min_width=800,min_height=600,max_width=2048,max_height=2048',
        'name' => 'required|string|max:255',
        'continent' => 'required|integer|exists:regions,id',
        'country' => 'required|integer|exists:regions,id',
        'province' => 'integer|exists:regions,id',
        'region' => 'integer|exists:regions,id',
        'municipality' => 'integer|exists:regions,id',
        'city' => 'required|max:255|string',
        'latitude' => 'required|numeric',
        'longitude' => 'required|numeric',
        'facebook' => 'nullable|max:255|string',
        'instagram' => 'nullable|max:255|string',
        'twitter' => 'nullable|max:255|string',
        'youtube' => 'nullable|max:255|string',
        'history' => 'nullable|string',
        // Slike
        'galerija' => 'array',
        'galerija.*' => 'required|image',
    ];

    protected $objectBalonAdditionalValidations = [
        // Balon tereni
        'tereni' => 'array',
        'tereni.*' => 'array',
        'tereni.*.name' => 'required|max:255|string',
        'tereni.*.sports' => 'required|array',
        'tereni.*.sports.*' => 'required|max:255|string|in:Nogomet,Mali nogomet,Košarka,Tenis,Stoni tenis,Odbojka,Badminton,Univerzalni teren',
        'tereni.*.type_of_field' => 'required|max:255|string|in:Parket,Bitumen,Plastika,Guma,Zemlja,Ostalo',
        'tereni.*.capacity' => 'nullable|integer',
        'tereni.*.public_capacity' => 'nullable|integer',
        'tereni.*.length' => 'nullable|integer',
        'tereni.*.width' => 'nullable|integer',
        // Balon cjenovnik
        'cjenovnik' => 'array',
        'cjenovnik.*' => 'array',
        'cjenovnik.*.sport' => 'required|max:255|string|in:Nogomet,Mali nogomet,Košarka,Tenis,Stoni tenis,Odbojka,Badminton,Univerzalni teren',
        'cjenovnik.*.name' => 'required|max:255|string',
        'cjenovnik.*.price' => 'required|integer|between:1,1000',
    ];

    protected $objectSkiAdditionalValidations = [
        // Skijaliste staze
        'staze' => 'array',
        'staze.*' => 'array',
        'staze.*.name' => 'required|max:255|string',
        'staze.*.level' => 'required|max:255|string|in:Lahko,Srednje,Teško',
        'staze.*.length' => 'nullable|integer|between:1,30000',
        'staze.*.time' => 'nullable|integer|between:1,1000',
        'staze.*.start_point' => 'nullable|integer|between:1,8000',
        'staze.*.end_point' => 'nullable|integer|between:1,8000',
        // Skijaliste cjenovnik
        'cjenovnik' => 'array',
        'cjenovnik.*' => 'array',
        'cjenovnik.*.description' => 'required|max:255|string',
        'cjenovnik.*.price' => 'required|integer|between:1,10000',
        'cjenovnik.*.price_kids' => 'required|integer|between:1,10000',
    ];

    protected $objectUniqueValidationRules = [
        // General
        'number_of_fields' => 'nullable|integer|between:1,50',
        'number_of_pools' => 'nullable|integer|between:1,50',
        'number_of_tracks' => 'nullable|integer|between:1,100',
        'number_of_balls' => 'nullable|integer|between:1,500',
        'number_of_shooting_places' => 'nullable|integer|between:1,500',
        'type_of_grass' => 'nullable|max:255|string|in:Prirodna trava,Umjetna trava (plastika)',
        'elevation' => 'nullable|integer|between:1,8000',
        'stadium_length' => 'nullable|integer|between:1,300',
        'stadium_width' => 'nullable|integer|between:1,300',
        'number_of_ski_tracks' => 'nullable|integer|between:1,200',
        'number_of_ski_lifts' => 'nullable|integer|between:1,200',
        'water_effects' => 'nullable|boolean',
        'type_of_field' => 'nullable|max:255|string|in:Parket,Bitumen,Plastika,Guma,Zemlja,Kombinovano',
        'area' => 'nullable|integer',
        'water_area' => 'nullable|integer',
        'capacity' => 'nullable|integer',
        'pool_capacity' => 'nullable|integer',
        'stadium_capacity' => 'nullable|integer',
        // Additional
        'wifi' => 'nullable|max:255|string|in:Besplatan,Uz naplatu,Nema',
        'parking' => 'nullable|max:255|string|in:Besplatan,Uz naplatu,Nema',
        'restaurant' => 'nullable|max:255|string|in:U sklopu objekta,U blizini objekta,Nema',
        'hotels' => 'nullable|boolean',
        'cafe' => 'nullable|max:255|string|in:U sklopu objekta,U blizini objekta,Nema',
        'access_to_disabled' => 'nullable|max:255|string|in:Obezbjeđen,Direktno sa platoa,Nije obezbjeđen',
        'number_of_locker_rooms' => 'nullable|integer|between:0,50',
        'rent_equipment' => 'nullable|boolean',
        // SZS Attributes
        'hot_water_showers' => 'nullable|boolean',
        'result_board' => 'nullable|boolean',
        'kids_playground' => 'nullable|boolean',
        'wardrobe_with_key' => 'nullable|boolean',
        'props' => 'nullable|boolean',
        'air_conditioning' => 'nullable|boolean',
        'protective_net' => 'nullable|boolean',
        'optimum_temperature' => 'nullable|boolean',
        'video_surveillance' => 'nullable|boolean',
        'equipment_rent' => 'nullable|boolean',
        'kid_pools' => 'nullable|boolean',
        'entering_a_props' => 'nullable|boolean',
        'urine_detector' => 'nullable|boolean',
        'reservations' => 'nullable|boolean',
        'child_equipment' => 'nullable|boolean',
        'special_shoes' => 'nullable|boolean',
        'hygiene_equipment' => 'nullable|boolean',
        'member_card' => 'nullable|boolean',
        'maintenance_service' => 'nullable|boolean',
        'emergency_intervention' => 'nullable|boolean',
        'skiing_school' => 'nullable|boolean',
        'snowboarding_school' => 'nullable|boolean',
        'skiing_equipment_shops' => 'nullable|boolean',
        'mobile_rescue_team' => 'nullable|boolean',
        'night_skiing' => 'nullable|boolean',
        'commenting_cabins' => 'nullable|boolean',
        'speaker_system' => 'nullable|boolean',
        'fan_shop' => 'nullable|boolean',
        'use_own_equipment' => 'nullable|boolean',
        'equipment_service' => 'nullable|boolean',
        'shooting_school' => 'nullable|boolean',
        'protective_equipment' => 'nullable|boolean',
    ];

    /**
     * ObjectController constructor.
     * @param ObjectRepository $objectRepository
     * @param RegionRepository $regionRepository
     */
    public function __construct(ObjectRepository $objectRepository, RegionRepository $regionRepository){
        $this->objectRepository = $objectRepository;
        $this->regionRepository = $regionRepository;
        $this->objectCommonValidationRules['established_in'] = 'nullable|date|before_or_equal:' . Carbon::now()->toDateString();
    }

    /**
     *
     */
    public function displayAddObjectCategories() {
        $object_types = $this->objectRepository
            ->getAllObjectTypes();

        return view('objects.add', compact('object_types'));
    }

    public function displayAddObject($object_id) {
        $object_type = $this->objectRepository
            ->getObjectTypeById($object_id);

        $columns = Schema::getColumnListing($object_type->object_table);
        $to_delete = ['id', 'object_type_id', 'created_at', 'updated_at'];
        $columns = array_diff($columns, $to_delete);

        $inputs = [];

        foreach ($this->allAttributeInputs as $key => $attribute) {
            foreach ($columns as $column) {
                if($key == $column) {
                    $inputs[$key] = $attribute;
                }
            }
        }

        foreach ($inputs as $key => $input) {
            $inputs[$key] = explode('|', $input);
            foreach ($inputs[$key] as $key_in => $input_attribute) {
                $newArray = explode(':', $input_attribute);

                $inputs[$key][$newArray[0]] = $newArray[1];
                unset($inputs[$key][$key_in]);
            }
        }

        foreach ($inputs as $key => $input) {
            if(array_key_exists('options', $input)){
                $inputs[$key]['options'] = explode(',', $input['options']);
            }
        }

        $inputs = json_decode(json_encode($inputs));

        $regions = $this->regionRepository
            ->getAll();

        // Dodaj value

        return view('objects.new', compact('object_type', 'inputs', 'regions'));
    }

    public function createObject(Request $request, $object_type_id) {
        $object_type = $this->objectRepository
            ->getObjectTypeById($object_type_id);

        $columns = Schema::getColumnListing($object_type->object_table);
        $to_delete = ['id', 'object_type_id', 'created_at', 'updated_at'];
        $columns = array_diff($columns, $to_delete);

        $uniqueValidationRules = [];
        foreach ($columns as $column) {
            $uniqueValidationRules[$column] = $this->objectUniqueValidationRules[$column];
        }

        $completeValidationRules = array_merge($this->objectCommonValidationRules, $uniqueValidationRules);

        // Special cases for Skijaliste i Balon
        if($object_type->type == 'Balon') {
            $completeValidationRules = array_merge($completeValidationRules, $this->objectBalonAdditionalValidations);
        } else if ($object_type->type == 'Skijalište') {
            $completeValidationRules = array_merge($completeValidationRules, $this->objectSkiAdditionalValidations);
        }

        $validator = Validator::make($request->all(), $completeValidationRules);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $createObject = $this->objectRepository
                ->createObject($request, $object_type, $columns);

            if($createObject) {
                flash()->overlay('Uspješno ste dodali novi objekat.', 'Čestitamo');
                return redirect('/objects/' . $createObject->id);
            }
        }
    }
}
