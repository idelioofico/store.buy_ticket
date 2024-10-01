<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventTopic;
use App\Models\EventType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {

        $topics = EventTopic::get()->toArray();
        $event_types = EventType::get()->toArray();

        // dd($topics,$event_types);
        // dd(collect($topics)->merge($event_types)->sortBy('name'));
        
        $data = array(
            'categories' => collect($topics)->merge($event_types)->sortBy('name')
        );

        // dd($data['events']);
        return  view('home', $data);
    }


    public function event_list(Request $request)
    {
        $data = array(
            'events' => Event::with(['tickets','topic','event_type'])->get()
        );
        
        return  view('events.event_list', $data);
    }

    public function faq(Request $request)
    {
        $data = array();
        return view('help.faq', $data);
    }

    public function help_center(Request $request)
    {
        $data = array();
        return view('help.help_center', $data);
    }

    public function contact_us(Request $request)
    {
        $data = array();
        return view('help.contact_us', $data);
    }
}
