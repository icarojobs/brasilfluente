<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('alias', 191)->unique();
			$table->string('email', 191)->unique();
			$table->integer('city_id')->unsigned();
			$table->string('whatsapp')->nullable();
			$table->string('password');
			$table->string('profession');
			$table->text('note');
			$table->string('picture')->nullable();
			$table->boolean('active')->default(false);
            $table->rememberToken();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}