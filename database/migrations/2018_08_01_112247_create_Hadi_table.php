<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHadiTable extends Migration {

	public function up()
	{
		Schema::create('Hadi', function(Blueprint $table) {
			$table->integer('HadiID');
		});
	}

	public function down()
	{
		Schema::drop('Hadi');
	}
}