<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTravelRequest;
use App\SuperTravel;
use App\Country;
use Auth;
use DB;

class SuperTravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
      //return view('admin\travel\index');
	  $travel=SuperTravel::all();
		return view('admin\travel\index',compact('travel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin\travel\create');
    }
	
	public function search()
    {
		$searchString = \Input::get('searchString');
		$travel= DB::table('supertravel')->where('title', 'like', '%' .$searchString.'%')->get();
		$travel= DB::table('supertravel')->where('detail', 'like', '%' .$searchString.'%')->get();
		$travel= DB::table('supertravel')->where('location', 'like', '%' .$searchString.'%')->get();
		
       return view('admin\travel\index',compact('travel'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTravelRequest $request)
    {
     $travel = new \App\SuperTravel;
	   $travel->title = $request->title;
	   $travel->country_id = $request->country_id;
	   $travel->detail = $request->detail;
	   $travel->location = $request->location;
	   $travel->owner_id = Auth::user()->id;
	   $main_image = $request->main_image;
	   
	   if($main_image){
		   $main_image_filename=$main_image->getClientOriginalName();
		   $main_image->move(public_path('images'),$main_image_filename);
	   }else{
		   $main_image_filename='noImage.jpg';
	   }
	   $travel->main_image = $main_image_filename;
	   $travel->save();

	   return \Redirect::route('supertravel.index')->with('message','Tour added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $supertravel=SuperTravel::find($id);
		return view('admin\travel\show',compact('supertravel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supertravel=SuperTravel::find($id);
		return view('admin\travel\edit',compact('supertravel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTravelRequest $request, $id)
    {
        $supertravel = SuperTravel::find($id) ;
	    $supertravel->title = $request->title;
	   $supertravel->country_id = $request->country_id;
	   $supertravel->detail = $request->detail;
	   $supertravel->location = $request->location;
	   $supertravel->owner_id = Auth::user()->id;
	   $main_image = $request->main_image;
	   
	   $current_image_filename=SuperTravel::find($id)->main_image ;
	   
	   if($main_image){
		   $main_image_filename=$main_image->getClientOriginalName();
		   $main_image->move(public_path('images'),$main_image_filename);
	   }else{
		   $main_image_filename=$current_image_filename;
	   }
	   $supertravel->main_image = $main_image_filename;
	   $supertravel->save();

	   return \Redirect::route('supertravel.index')->with('message','SuperTravel Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $supertravel = SuperTravel::find($id) ;
	   $supertravel->delete();

	   return \Redirect::route('supertravel.index')->with('message','SuperTravel Deleted');
    }
}
