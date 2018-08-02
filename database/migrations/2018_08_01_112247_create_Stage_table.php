<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStageTable extends Migration {

	public function up()
	{
		Schema::create('Stage', function(Blueprint $table) {
			$table->integer('StageID');
			$table->integer('StageSeqNo');
		});
	}

	public function down()
	{
		Schema::drop('Stage');
	}
}