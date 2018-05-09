<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
class FrontendCountryController extends Controller
{
    

   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {	
		$CountryName=Country::find($id);
        $CountryTour=Country::find($id)->supertravel;
		return view('frontend\countryTour',array('CountryTour'=> $CountryTour,'CountryName'=> $CountryName));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
}
