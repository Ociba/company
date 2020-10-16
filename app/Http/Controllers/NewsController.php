<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    //
    /** 
     * This function returns news form to add news
    */
    protected function getNewsForm(){
        return view('admin.news-form');
    }
    /** 
     * This function returns news in the dashboard table
    */
    protected function getNewsOnDashbord(){
        $display_news =News::where('status','active')->get();
        return view('admin.news', compact('display_news'));
    }
    /** 
     * This function saves news details in the database
    */
    private function createNews(){
        $save_picture = request()->image;
        $image_original_name = $save_picture->getClientOriginalName();
        $save_picture->move('news-images/',$image_original_name);

        $save_news =new News;
        $save_news ->heading  =request()->heading;
        $save_news ->content  =request()->content;
        $save_news ->image    =$image_original_name;
        $save_news ->save();
        return redirect()->back()->with('message','You have submitted news successfully');
    }
     /**
     * This function validates the news
     */
    protected function validateNews(){
        if(empty(request()->heading)){
            return redirect()->back()->withErrors('Heading is required, please fill it to continue');
        }elseif(empty(request()->content)){
            return redirect()->back()->withErrors('Content is required, please fill it to continue');
        }elseif(empty(request()->image)){
            return redirect()->back()->withErrors('Image is required, please fill it to continue');
        }
        else{
            return $this->createNews();
        }
    }
    /** 
     * This function edits news
    */
    protected function editNews($id){
        $edit_news =News::where('id',$id)->get();
        return view('admin.edit-news', compact('edit_news'));
    }
    /** 
     * This function updates the news details
    */
    protected function updateNews($id){
        $update_news = News::find($id)->update(array(
            'heading'        => request()->heading,
            'content'        => request()->content,
            'image'          =>  request()->image,   
        ));
        return redirect()->back()->with('A News Update was made successfully');
    } 
    /** 
     * This function updates news status to deleted
    */
    protected function deleteNews($id){
        News::where('id',$id)->update(array('status' =>'deleted'));
        return redirect()->back()->with('message','You have deleted news successfully');
    }
}
