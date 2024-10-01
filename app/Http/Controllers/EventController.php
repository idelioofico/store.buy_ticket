<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Logs;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function detail(Event $event, Request $request)
    {

        try {

            $data = array(
                'event' => $event
            );

            return view('events.details', $data);

        } catch (\Throwable $th) {

            Logs::create(
                [
                    'action' => 'event_details_',
                    'request' => json_encode($request->all()),
                    'response' => json_encode($data),
                    'ip' => $request->ip(),
                    'user' => ''
                ]
            );
        }
    }
}
