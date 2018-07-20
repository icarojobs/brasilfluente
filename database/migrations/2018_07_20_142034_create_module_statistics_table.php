<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateModuleStatisticsTable extends Migration {

	public function up()
	{
		Schema::create('module_statistics', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_id')->unsigned();
			$table->integer('module_id')->unsigned();
			$table->boolean('is_finished')->default(false);
		});
	}

	public function down()
	{
		Schema::drop('module_statistics');
	}
}