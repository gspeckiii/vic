<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class GalleryController extends Controller
{
    private $table='galleries';
    //List Gallery
    public function index(){
    	
        $gallery=DB::table($this->table)->get();
        return view('gallery/index',compact('gallery'));
    }
    public function create(){
        if (!Auth::check()) {
                 return \Redirect::route('gallery.index');   # code...
        }
 		return view('gallery/create');
    }
    public function store(Request $request){
        $name           =$request->input('name');
        $description    =$request->input('description');
        $cover_image    =$request->file('cover_image');
        $owner_id=1;
        if ($cover_image){
            $cover_image_filename=$cover_image->getClientOriginalName();
            $cover_image->move(public_path('images'),$cover_image_filename);
        }else{
            $cover_image_filename='noimages.jpg';
        }

        DB::table($this->table)->insert(
            [
                'name'=>$name,
                'description'=>$description,
                'cover_image'=>$cover_image_filename,
                'owner_id'=>$owner_id
            ]
        );
        //set message
        \Session::flash('message','Gallery Created');
        //Redirect
        return \Redirect::route('gallery.index');

    }
            //show gallery photos
    public function show($id){

        //get gallery
        $gallery=DB::table($this->table)->where('id',$id)->first();
        //get photos
        $photos=DB::table('photos')->where('gallery_id',$id)->get();
    	//render the view
        return view('gallery/show',compact('gallery','photos'));
    }

     
}
