<?php

namespace App\Repositories;

use App\Event;
use App\EventType;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class EventRepository {
    protected $model;
    protected $eventTypeModel;

    public function __construct(Event $model, EventType $eventTypeModel) {
        $this->model = $model;
        $this->eventTypeModel = $eventTypeModel;
    }

    public function getAllEventTypes() {
        return $this->eventTypeModel->all();
    }

    public function createEvent(Request $request) {
        $logo = $request->file('image');
        $newLogoName = time() . '-' . Auth::user()->id . '.' . $logo->getClientOriginalExtension();
        $destinationPath = public_path('/images/event_images');
        $logo->move($destinationPath, $newLogoName);

        // Provjeri najmanji level regije
        $region_id = $request->get('country');

        if($request->has('province')) {
            $region_id = $request->get('province');
        }

        if($request->has('region')) {
            $region_id = $request->get('region');
        }

        if($request->has('municipality')) {
            $region_id = $request->get('municipality');
        }

        $createEvent = $this->model->create([
            'image' => $newLogoName,
            'name' => $request->get('name'),
            'sport_id' => $request->get('sport'),
            'region_id' => $region_id,
            'city' => $request->get('city'),
            'latitude' => $request->get('latitude'),
            'longitude' => $request->get('longitude'),
            'date_start' => new Carbon($request->get('date_start')),
            'time_start' => $request->get('time_start'),
            'event_type_id' => $request->get('event_type_id'),
            'max_participants' => $request->get('max_participants'),
            'registration_fee' => $request->get('event_type_id') == 1 ? $request->get('registration_fee') : null,
            'first_place_award' => $request->get('event_type_id') == 1 ? $request->get('first_place_award') : null,
            'duration' => $request->get('event_type_id') == 1 ? $request->get('duration') : null,
            'description' => $request->get('description'),
            'user_id' => Auth::user()->id
        ]);

        if($createEvent) {
            return $createEvent;
        }

        return null;
    }

    public function getAllEventsFromDateToDate($startDate, $endDate) {
        $startDate = date($startDate);
        $endDate = date($endDate);

        $events = $this->model
            ->whereBetween('date_start', [$startDate, $endDate])
            ->get();

         $eventsForCalendar = [];

        foreach($events as $event) {
            $eventsForCalendar[] = (object)[
                'id' => $event->id,
                'title' => $event->name,
                'start' => $event->date_start . 'T' . $event->time_start
            ];
        }

        return $eventsForCalendar;
    }

    public function getEventById($id) {
        return $this->model
            ->with(['region', 'sport', 'type', 'user'])
            ->where('id', $id)
            ->first();
    }

}