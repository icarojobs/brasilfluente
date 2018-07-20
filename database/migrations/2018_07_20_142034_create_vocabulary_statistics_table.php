<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVocabularyStatisticsTable extends Migration {

	public function up()
	{
		Schema::create('vocabulary_statistics', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('lesson_id');
			$table->integer('hits');
			$table->integer('mistakes');
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('vocabulary_statistics');
	}
}