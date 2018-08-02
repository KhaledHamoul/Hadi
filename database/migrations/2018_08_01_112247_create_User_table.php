<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	public function up()
	{
		Schema::create('User', function(Blueprint $table) {
			$table->integer('HajjID');
			$table->string('Name', 50);
			$table->string('Email', 30);
			$table->integer('Phone');
			$table->string('Nationality', 10);
		});
	}

	public function down()
	{
		Schema::drop('User');
	}
}