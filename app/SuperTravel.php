<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuperTravel extends Model
{
   protected $table ='supertravel';
	
	protected $fillable =['title','detail','main_image','location','owner_id','country_id'];
	
	protected $hidden =[];
	
	public function country(){
		return $this->belongsTo('App\Country');
	}
}
