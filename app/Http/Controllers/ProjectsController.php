<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use Image;
class ProjectsController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::orderBy('created_at', 'desc')->get();
        return view('projects.projects', compact('albums'));
    }

    public function indexMK()
    {
        $albums = Album::orderBy('created_at', 'desc')->get();
        return view('mk.projects.projects', compact('albums'));
    }

    public function create_project(Request $request){
        $album = new Album;
        $album->name=$request->input('name');
        $album->name_mk=$request->input('name_mk');
        $album->published = 1;
        $album->save();
        \Session::flash('flash_message', 'Project created');
        return redirect('/projects');
    }

    public function view($id){
      $album = Album::findOrFail($id);
      return view('projects.view', compact('album'));
    }

    public function view_mk($id){
      $album = Album::findOrFail($id);
      return view('mk.projects.view', compact('album'));
    }

    public function delete($id){
        $album = Album::find($id);
        $album->delete();
        \Session::flash('flash_message', 'Project has been deleted!');
        return redirect('/projects');
    }

    public function destroy($id){
        \DB::table('images')->where('id', $id)->delete();
        \Session::flash('flash_message', 'Image Deleted!');
        return redirect('/projects');
    }

    public function update($id, Request $request){
        $input = $request->input('name');
        $input_mk = $request->input('name_mk');
        Album::find($id)->update(array('name' => $input ));
        Album::find($id)->update(array('name_mk' => $input_mk));
        \Session::flash('flash_message', 'Project Updated!');
        return redirect('/projects');
    }

    public function do_image_upload(Request $request){
        $file = $request->file('file');
        $filename = uniqid() . $file -> getClientOriginalName();
        $file -> move('img/albums/', $filename);
        $gallery = Album::find($request->input('album_id'));
        $image = $gallery -> images() ->create([
            'album_id' => $request->input('album_id'),
            'file_name' => $filename,
            'file_size' => $file->getClientsize(),
            'file_mime' => $file->getClientMimeType(),
            'file_path' => 'img/albums/' . $filename
        ]);
    }
}
