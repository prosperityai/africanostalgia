<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreCountryRequest;
use App\Country;
use DB;
class CountryController extends Controller
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
       $Country=Country::all();
		return view('admin\country\index',compact('Country'));
    }
	
	public function search()
    {
		$searchString = \Input::get('searchString');
		$Country= DB::table('country')->where('name', 'like', '%' .$searchString.'%')->get();

       return view('admin\country\index',compact('Country'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin\country\create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCountryRequest $request)
    {
       $country = new \App\Country;
	   $country->name = $request->name;
	   $country->save();

	   return \Redirect::route('country.index')->with('message','Country added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $supertravel=Country::find($id)->supertravel;
		return view('admin\country\show',array('supertravel'=> $supertravel));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $country=Country::find($id);
		return view('admin\country\edit',compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCountryRequest $request, $id)
    {
        $country = Country::find($id) ;
	    $country->name = $request->name;
	   $country->save();

	   return \Redirect::route('country.index')->with('message','Country Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = Country::find($id) ;
	   $country->delete();

	   return \Redirect::route('country.index')->with('message','Country Deleted');
    }
}
