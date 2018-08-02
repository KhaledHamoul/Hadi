<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMKTable extends Migration {

	public function up()
	{
		Schema::create('MK', function(Blueprint $table) {
			$table->integer('MKID');
		});
	}

	public function down()
	{
		Schema::drop('MK');
	}
}