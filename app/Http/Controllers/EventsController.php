<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{
    //
    /** 
     * This function returns events form to add events
    */
    protected function getEventsForm(){
        return view('admin.events-form');
    }
    /** 
     * This function returns events in the dashboard table
    */
    protected function getEventsOnDashbord(){
        $get_events =Event::where('status','active')->get();
        return view('admin.events', compact('get_events'));
    }
    /** 
     * This function saves events details in the database
    */
    private function createEvents(){
        $save_events =new Event;
        $save_events ->heading  =request()->heading;
        $save_events ->content  =request()->content;
        $save_events ->save();
        return redirect()->back()->with('message','You have submitted event(s) successfully');
    }
     /**
     * This function validates the event
     */
    protected function validateEvent(){
        if(empty(request()->heading)){
            return redirect()->back()->withErrors('Heading is required, please fill it to continue');
        }elseif(empty(request()->content)){
            return redirect()->back()->withErrors('Content is required, please fill it to continue');
        }
        else{
            return $this->createEvents();
        }
    }
     /** 
     * This function edits news
    */
    protected function editEvents($id){
        $edit_events =Event::where('id',$id)->get();
        return view('admin.edit-events', compact('edit_events'));
    }
    /** 
     * This function updates the news details
    */
    protected function updateEvents($id){
        $update_event = Event::find($id)->update(array(
            'heading'        => request()->heading,
            'content'        => request()->content,   
        ));
        return redirect()->back()->with('An Event Update was made successfully');
    } 
    /** 
     * This function updates event status to deleted
    */
    protected function deleteEvents($id){
        Event::where('id',$id)->update(array('status' =>'deleted'));
        return redirect()->back()->with('message','You have deleted event successfully');
    }
}
