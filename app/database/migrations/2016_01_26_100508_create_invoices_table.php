<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoices', function ($table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('course_id')->unsigned();
			$table->string('invoice_no');
			$table->tinyInteger('paid')->default(0);
			
			$table->timestamps();
			
			$table->engine = 'InnoDB';
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('invoices');
	}

}
