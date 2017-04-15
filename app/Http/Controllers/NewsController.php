<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Novost;
use Request;
use Image;
use App\Http\Requests\StoreNovostPost;

class NewsController extends Controller
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
        $novosti = Novost::orderBy('created_at', 'desc')->paginate(10);
        return view('news.news', compact('novosti'));
    }

    public function indexMK()
    {
        $novosti = Novost::orderBy('created_at', 'desc')->paginate(10);
        return view('mk.news.news', compact('novosti'));
    }
    public function write(){
    return view('news.write');
  }
  public function news_get($id){
    $novosti = Novost::find($id);
    return view('news.update', compact('novosti'));
  }

  public function news_get_mk($id){
    $novosti = Novost::find($id);
    return view('mk.news.update', compact('novosti'));
  }
  public function update($id){
    $input = Request::all();
    $destination = public_path().'/img/news/';
    if (Request::hasFile('novost_img')){
      $novost_img = Request::file('novost_img');
      $extension = $novost_img->getClientOriginalExtension();
      $fileName = time().rand(11111,99999).'.'.$extension;
      //dodati Image objekat
      Image::make($novost_img->getRealPath())->save($destination.$fileName);
      $input['novost_img'] = $fileName;
      Novost::find($id)->update($input);
      \Session::flash('flash_message', 'Uspjesno ste promjenili Vijest!');
      return redirect('/news');
      
    } else {
      Novost::find($id)->update($input);
      \Session::flash('flash_message', 'Uspjesno ste promjenili Vijest!');
      return redirect('/news');
    }

  }
  public function delete($id){
    $novost = Novost::find($id);
    $novost->delete();
    \Session::flash('flash_message', 'Izbrisali ste Vijest!');
    return redirect('/news');
  }

  public function save(StoreNovostPost $store){
    $novost_data = $store->all();
    $destination = public_path().'/img/news/';
    //dodati Input klasu
    if (Request::hasFile('novost_img')){
      $novost_img = Request::file('novost_img');
      $extension = $novost_img->getClientOriginalExtension();
      $fileName = time().rand(11111,99999).'.'.$extension;
      //dodati Image objekat
      Image::make($novost_img->getRealPath())->save($destination.$fileName);
      $novost_data['novost_img'] = $fileName;
      Novost::create($novost_data);
      \Session::flash('flash_message', 'Uspješno ste kreirali novu vijest!');
      return redirect('/news');
    } else {
      $novost_data['novost_img'] = '';
      Novost::create($novost_data);
      \Session::flash('flash_message', 'Uspješno ste kreirali novu vijest!');
      return redirect('/news');
    }
  }
}
