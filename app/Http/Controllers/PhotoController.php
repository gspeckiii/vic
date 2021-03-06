<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class PhotoController extends Controller
{
 private $table='photos';
    //List Gallery

    public function create($gallery_id){
        if (!Auth::check()) {
            return \Redirect::route('gallery.index');   # code...
        }
        return view('photo/create',compact('gallery_id'));
    }
    //store photo
    public function store(Request $request){
        $gallery_id          =$request->input('gallery_id');
        $title         =$request->input('title');
        $description    =$request->input('description');
        $location    =$request->input('location');
        $image    =$request->file('image');
        $owner_id=1;
        if ($image){
            $image_filename=$image->getClientOriginalName();
            $image->move(public_path('images'),$image_filename);
        }else{
            $image_filename='noimages.jpg';
        }

        DB::table($this->table)->insert(
            [
                'title'=>$title,
                'description'=>$description,
                'location'=>$location,
                'gallery_id'=>$gallery_id,
                'image'=>$image_filename,
                'owner_id'=>$owner_id
            ]
        );
        //set message
        \Session::flash('message','Portfolio Created');
        //Redirect
        return \Redirect::route('gallery.show',array('id'=>$gallery_id));
    }
    //show portfolio details
    public function details($id){
        //get gallery
        $photos=DB::table($this->table)->where('id',$id)->first();

        //render the view
        return view('photo/details',compact('photos'));
    }  

    public function destroy($id,$gallery_id){
        $photos=DB::table($this->table)->where('id',$id)->delete();
        \Session::flash('message','Portfolio Deleted');
        return \Redirect::route('gallery.show',array('id'=>$gallery_id));
    }  //
    public function edit($id){
        $photos=DB::table($this->table)->where('id',$id)->first();

        //render the view
        return view('photo/edit',compact('photos'));
    }
       public function updateData(Request $request){
        $id          =$request->input('id');
        $gallery_id          =$request->input('gallery_id');
        $title         =$request->input('title');
        $description    =$request->input('description');
        $location    =$request->input('location');
        $image    =$request->file('image');
        $owner_id=1;
        if ($image){
            $image_filename=$image->getClientOriginalName();
            $image->move(public_path('images'),$image_filename);
            DB::table($this->table)->where('id',$id)->update(
            [
                'title'=>$title,
                'description'=>$description,
                'location'=>$location,
                'gallery_id'=>$gallery_id,
                'image'=>$image_filename,
                'owner_id'=>$owner_id
            ]
        );
        }else{
            DB::table($this->table)->where('id',$id)-> update(
            [
                'title'=>$title,
                'description'=>$description,
                'location'=>$location,
                'gallery_id'=>$gallery_id,
                'owner_id'=>$owner_id
            ]
        );
        }


        //set message
        \Session::flash('message','Portfolio Updated');
        //Redirect
        return \Redirect::route('gallery.show',array('id'=>$gallery_id));

       }

}
