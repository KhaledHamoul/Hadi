<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	public function up()
	{
		Schema::create('Orders', function(Blueprint $table) {
			$table->integer('OrderID');
			$table->integer('SeqNo');
			$table->integer('Quantity');
		});
	}

	public function down()
	{
		Schema::drop('Orders');
	}
}