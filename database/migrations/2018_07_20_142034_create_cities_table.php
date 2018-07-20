<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitiesTable extends Migration {

	public function up()
	{
		Schema::create('cities', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('state_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('cities');
	}
}