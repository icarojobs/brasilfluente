<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLessonsTable extends Migration {

	public function up()
	{
		Schema::create('lessons', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('type_id')->unsigned();
			$table->string('title', 191)->unique();
			$table->string('slug');
			$table->longText('description')->nullable();
			$table->string('question1')->nullable();
			$table->string('question2')->nullable();
			$table->string('question3')->nullable();
			$table->string('question4')->nullable();
			$table->text('video_url')->nullable();
			$table->text('audio_url')->nullable();
			$table->integer('points')->default('10');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('lessons');
	}
}