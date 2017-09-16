<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('plans', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('stage_name')->nullable();
			$table->float('level_income', 10)->nullable()->default(0.00);
			$table->integer('total_member')->nullable();
			$table->float('level_commision', 10)->nullable()->default(0.00);
			$table->string('team_development_seminar')->nullable();
			$table->string('awards')->nullable();
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
		Schema::drop('plans');
	}

}
