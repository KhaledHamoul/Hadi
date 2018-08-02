<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHadiTypeTable extends Migration {

	public function up()
	{
		Schema::create('HadiType', function(Blueprint $table) {
			$table->integer('TypeID');
			$table->string('TypeName', 30);
			$table->double('Price');
		});
	}

	public function down()
	{
		Schema::drop('HadiType');
	}
}