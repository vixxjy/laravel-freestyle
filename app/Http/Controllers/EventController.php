<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Calendar;

class EventController extends Controller
{
    public function index(){
        $events = [];
        
        $data = Event::all();
        // dd($data);
        if($data->count()){
            foreach($data as $key => $value){
                $events[] = Calendar::event(
                  $value->title,
                  true,
                  new \DateTime($value->start_date),
                  new \DateTime($value->end_date. '+1 day')
                );
            }
        }
        
        $calendar = Calendar::addEvents($events);
        return view('calender', compact('calendar'));
    }
    
    public function getCSV()
    {
        $users = \App\User::all();
    
    	$csvExporter = new \Laracsv\Export();
    
    	return $csvExporter->build($users, ['id', 'name', 'email'])->download();
    }
}
