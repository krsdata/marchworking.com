<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductKeysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_keys', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('product_id')->unsigned()->nullable();
			$table->text('secret_key', 65535)->nullable();
			$table->integer('user_id')->unsigned()->nullable();
			$table->integer('validity_year')->unsigned()->nullable();
			$table->integer('dealer_id')->unsigned()->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_keys');
	}

}
