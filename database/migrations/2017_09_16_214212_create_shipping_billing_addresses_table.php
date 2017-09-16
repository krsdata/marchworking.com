<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShippingBillingAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shipping_billing_addresses', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->unsigned()->nullable();
			$table->integer('product_id')->unsigned()->nullable();
			$table->string('status')->nullable();
			$table->string('reference_number')->nullable();
			$table->string('name')->nullable();
			$table->string('email')->nullable();
			$table->string('mobile')->nullable();
			$table->string('phone')->nullable();
			$table->text('address1', 65535)->nullable();
			$table->text('address2', 65535)->nullable();
			$table->string('zip_code')->nullable();
			$table->string('city')->nullable();
			$table->string('state')->nullable();
			$table->string('country')->nullable();
			$table->boolean('address_type')->nullable()->default(1);
			$table->string('payment_mode')->nullable();
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
		Schema::drop('shipping_billing_addresses');
	}

}
