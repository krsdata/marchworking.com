<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoupansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coupans', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('coupan_code')->nullable();
			$table->integer('product_id')->unsigned()->nullable();
			$table->string('start_date')->nullable();
			$table->string('end_date')->nullable();
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
		Schema::drop('coupans');
	}

}
