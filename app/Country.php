<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
     protected $table ='country';
	
	protected $fillable =['name','publish'];
	
	protected $hidden =[];
	
	public function supertravel(){
		return $this->hasMany('App\SuperTravel');
	}
}
