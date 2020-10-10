<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SampleWork;

class SampleWorkController extends Controller
{
    //
    /** 
     * This function returns projects form to add project
    */
    protected function projectForm(){
        return view('admin.projects-form');
    }
    /** 
     * This function returns projects done by the company so far
    */
    protected function getProject(){
        $get_project =SampleWork::where('status','active')->get();
        return view('admin.projects', compact('get_project'));
    }
    /** 
     * This function saves projects to the database
    */
    private function submitProject(){
        $save_image = request()->image;
        $image_original_name = $save_picture->getClientOriginalName();
        $save_picture->move('project-images/',$image_original_name);

        $create_project = new SampleWork;
        $create_project ->name  =request()->name;
        $create_project ->image =$image_original_name;
        $create_project->save();
        return redirect()->back()->with('message','You have created project(s) successfully');
    }
    /**
     * This function validates the projects
     */
    protected function validateProject(){
        if(empty(request()->name)){
            return redirect()->back()->withErrors('Name is required, please fill it to continue');
        }elseif(empty(request()->image)){
            return redirect()->back()->withErrors('Image is required, please fill it to continue');
        }
        else{
            return $this->submitProject();
        }
    }
    /** 
     * This function change projects status to deleted
    */
    protected function deleteProject($id){
        SampleWork::where('id',)->update(array('status' =>'deleted'));
        return redirect()->back()->with('message','You have deleted project successfully');
    }
}
