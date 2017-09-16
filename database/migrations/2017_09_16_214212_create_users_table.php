<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->nullable();
			$table->string('email')->nullable();
			$table->string('phone')->nullable();
			$table->text('address', 65535)->nullable();
			$table->string('pincode')->nullable();
			$table->string('city')->nullable();
			$table->string('block')->nullable();
			$table->string('state')->nullable();
			$table->integer('referal_id')->unsigned()->nullable();
			$table->string('referal_pin')->nullable();
			$table->float('joining_amount', 10)->nullable();
			$table->string('bank_name')->nullable();
			$table->string('bank_account')->nullable();
			$table->string('bank_ifsc_code')->nullable();
			$table->string('bank_branch')->nullable();
			$table->string('last_login')->nullable();
			$table->string('login_ip')->nullable();
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
		Schema::drop('users');
	}

}
