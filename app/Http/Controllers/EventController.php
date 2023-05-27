<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function eventAdd(Request $request)
    {
        $validateFields = $request->validate([
            'eventName' => 'required|string',
            'eventTime' => 'required|string',
            'eventDate' => 'required',
            'eventPlace' => 'required|string',
            'eventDesc' => 'required',
            'eventPicture' => 'nullable|image|mimes:jpeg,png,jpg'
        ]);

        $imagePath = null;
        if($request->hasFile('eventPicture')){
            $imagePath = $request->file('eventPicture')->store('events', 'public');
        }

        $event = new Event;
        $event->event_id = Str::uuid();
        $event->eventName = $validatedData['eventName'];
        $event->event_Time = $validatedData['event_Time'];
        $event->event_Data = $validatedData['event_Data'];
        $event->event_Place = $validatedData['event_Place'];
        $event->event_Picture = $validatedData['event_Picture'];
        $event->event_Desc = $validatedData['event_Desc'];

        $event->save();

        return response()->json(['message' => 'Event created successfully', 'event' => $event], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
