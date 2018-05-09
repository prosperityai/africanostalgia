<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCountryidToSupertravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::table('supertravel', function (Blueprint $table) {
            
			$table->unsignedInteger('country_id');
			$table->foreign('country_id')->references('id')->on('country');
			
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('supertravel', function (Blueprint $table) {
            
			$table->dropforeign('supertravel_country_id_foreign');
			
            
        });
    }
}
