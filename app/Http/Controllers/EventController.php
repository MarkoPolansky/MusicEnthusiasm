<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Models\Event;
use App\Models\Tag;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EventController extends Controller
{

    public function show(Event $event)
    {
        $event->load('images','tags')->get();
        return Inertia::render('Events/Show')->with(['event' => $event]);
    }

    public function create()
    {

        return Inertia::render('Events/Create');
    }

    public function store(StoreEventRequest $request)
    {
        $data = $request->only(['title','description','happened_at','tags']);

       $event = Event::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'happened_at' => $data['happened_at'],
        ]);

       return redirect()->to('/');

    }

    public function update(StoreEventRequest $request, Event $event)
    {
        $data = $request->only(['title','description','happened_at','tags']);

        $event = Event::update([
            'title' => $data['title'],
            'description' => $data['description'],
            'happened_at' => $data['happened_at'],
        ]);
        $event->tags()->sync([$data['tags']]);

        return redirect()->back();
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->back();
    }
}
