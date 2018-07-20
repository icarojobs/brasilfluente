<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateModuleLessonTable extends Migration {

	public function up()
	{
		Schema::create('module_lesson', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('module_id')->unsigned();
			$table->integer('lesson_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('module_lesson');
	}
}