<?php

namespace App\Http\Controllers;

use App\Repositories\EventRepository;
use App\Repositories\RegionRepository;
use App\Repositories\SportRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    protected $regionRepository;
    protected $sportRepository;
    protected $eventRepository;

    public function __construct(RegionRepository $regionRepository, SportRepository $sportRepository, EventRepository $eventRepository) {
        $this->regionRepository = $regionRepository;
        $this->sportRepository = $sportRepository;
        $this->eventRepository = $eventRepository;
    }

    public function displayAddEvent(){

        $scripts[] = '/js/validation/event-validation.js';
        view()->share('scripts', $scripts);

        $regions = $this->regionRepository
            ->getAll();

        $sports = $this->sportRepository
            ->getAll();

        $event_types = $this->eventRepository
            ->getAllEventTypes();

        return view('events.add', compact('regions', 'sports', 'event_types'));
    }

    public function createEvent(Request $request) {
        dd($request->all());
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|dimensions:min_width=512,min_height=512',
            'name' => 'required|string|max:255',
            'sport' => 'required|integer|exists:sports,id',
            'continent' => 'required|integer|exists:regions,id',
            'country' => 'required|integer|exists:regions,id',
            'province' => 'integer|exists:regions,id',
            'region' => 'integer|exists:regions,id',
            'municipality' => 'integer|exists:regions,id',
            'city' => 'required|max:255|string',
            'date_start' => 'required|date|after_or_equal:' . Carbon::now()->toDateString(),
            'time_start' => 'required|date_format:H:i',
            'event_type_id' => 'required|integer|exists:event_types,id',
            'max_participants' => 'nullable|integer|min:1|max:10000',
            'registration_fee' => 'nullable|required_if:event_type_id,==,1|numeric|min:1|max:1000',
            'first_place_award' => 'nullable|required_if:event_type_id,==,1|numeric|min:1|max:100000',
            'duration' => 'nullable|integer|min:1|max:50',
            'description' => 'nullable|string|max:2000'
        ]);

        $validator->after(function ($validator) use ($request){
            if (!$request->has('latitude') || !$request->has('longitude')) {
                $validator->errors()->add('google', 'Polje mjesto/adresa mora biti popunjeno koristeći sugestije Google mjesta.');
            } else {
                if(!is_numeric($request->get('latitude')) || !is_numeric($request->get('longitude'))) {
                    $validator->errors()->add('google', 'Polje mjesto/adresa mora biti popunjeno koristeći sugestije Google mjesta.');
                }
            }
        });

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $createEvent = $this->eventRepository
                ->createEvent($request);

            if($createEvent) {
                flash()->overlay('Uspješno ste dodali novi događaj.', 'Čestitamo');
                return redirect('/events/' . $createEvent->id);
            }
        }
    }

    public function getEvents() {
        return view('events.calendar');
    }

    public function getEventsByDate(Request $request) {
        $events = $this->eventRepository
            ->getAllEventsFromDateToDate($request->get('start'), $request->get('end'));

        return $events;
    }

    public function showEvent($id) {
        $event = $this->eventRepository
            ->getEventById($id);

        if(!$event) {
            abort(404);
        }

        $regions = collect();
        $currentRegion = $event->region;
        while ($currentRegion) {
            $regions->put(strtolower($currentRegion->region_type->type), $currentRegion->name);

            $currentRegion = $currentRegion->parent_region;
        }

        $event->setAttribute('regions', $regions);

        return view('events.profile', compact('event'));
    }

    public function displayEditEvent($id) {
        $regions = $this->regionRepository->getAll();
        $sports = $this->sportRepository->getAll();
        $event_types = $this->eventRepository
            ->getAllEventTypes();

        $event = $this->eventRepository
            ->getEventById($id);

        if($event) {
            $eventRegions = collect();
            $currentRegion = $event->region;
            while ($currentRegion) {
                $eventRegions->put(strtolower($currentRegion->region_type->type), $currentRegion->id);

                $currentRegion = $currentRegion->parent_region;
            }

            $event->setAttribute('regions', $eventRegions);

            return view('events.edit', compact('event', 'regions', 'sports', 'event_types'));
        }

        abort(404);
    }

    public function editEventGeneral($id, Request $request) {
        $event = $this->eventRepository
            ->getEventById($id);

        if(!$event) {
            abort(404);
        }

        // Provjera da li je user napravio event
        $isOwner = $event->user->id == Auth::user()->id;
        if(!$isOwner) {
            abort(404);
        }

        $validator = Validator::make($request->all(), [
            'image' => 'image|dimensions:min_width=512,min_height=512',
            'name' => 'required|string|max:255',
            'sport' => 'required|integer|exists:sports,id',
            'continent' => 'required|integer|exists:regions,id',
            'country' => 'required|integer|exists:regions,id',
            'province' => 'integer|exists:regions,id',
            'region' => 'integer|exists:regions,id',
            'municipality' => 'integer|exists:regions,id',
            'city' => 'required|max:255|string'
        ]);

        $validator->after(function ($validator) use ($request){
            if (!$request->has('latitude') || !$request->has('longitude')) {
                $validator->errors()->add('google', 'Polje mjesto/adresa mora biti popunjeno koristeći sugestije Google mjesta.');
            } else {
                if(!is_numeric($request->get('latitude')) || !is_numeric($request->get('longitude'))) {
                    $validator->errors()->add('google', 'Polje mjesto/adresa mora biti popunjeno koristeći sugestije Google mjesta.');
                }
            }
        });

        if($validator->fails()){
            return redirect('/events/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        } else {

            $updateEventGeneral = $this->eventRepository
                ->updateGeneral($request, $event);

            if($updateEventGeneral) {
                flash()->overlay('Uspješno ste izmjenili "Općenito" sekciju eventa.', 'Čestitamo');
                return back();
            }
        }

    }

    public function editEventInfo($id, Request $request) {
        $event = $this->eventRepository
            ->getEventById($id);

        if(!$event) {
            abort(404);
        }

        // Provjera da li je user napravio event
        $isOwner = $event->user->id == Auth::user()->id;
        if(!$isOwner) {
            abort(404);
        }

        $validator = Validator::make($request->all(), [
            'date_start' => 'required|date|after_or_equal:' . Carbon::now()->toDateString(),
            'time_start' => 'required|date_format:H:i',
            'event_type_id' => 'required|integer|exists:event_types,id',
            'max_participants' => 'nullable|integer|min:1|max:10000',
            'registration_fee' => 'nullable|required_if:event_type_id,==,1|numeric|min:1|max:1000',
            'first_place_award' => 'nullable|required_if:event_type_id,==,1|numeric|min:1|max:100000',
            'duration' => 'nullable|integer|min:1|max:50',
            'description' => 'nullable|string|max:2000'
        ]);

        if($validator->fails()){
            return redirect('/events/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        } else {

            $updateEventInfo = $this->eventRepository
                ->updateInfo($request, $event);

            if($updateEventInfo) {
                flash()->overlay('Uspješno ste izmjenili pravila i sistem eventa.', 'Čestitamo');
                return back();
            }
        }

    }
}
