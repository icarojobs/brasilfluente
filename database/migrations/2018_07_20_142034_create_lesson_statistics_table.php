<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLessonStatisticsTable extends Migration {

	public function up()
	{
		Schema::create('lesson_statistics', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('lesson_id')->unsigned();
			$table->boolean('is_finished')->default(false);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('lesson_statistics');
	}
}