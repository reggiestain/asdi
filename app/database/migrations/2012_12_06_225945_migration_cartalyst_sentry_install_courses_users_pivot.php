<?php

use Illuminate\Database\Migrations\Migration;

class MigrationCartalystSentryInstallCoursesUsersPivot extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_user', function($table)
		{
			$table->integer('user_id')->unsigned();
			$table->integer('course_id')->unsigned();
			$table->tinyInteger('approved',0);
			$table->tinyInteger('paid',0);


			$table->engine = 'InnoDB';
			$table->primary(array('user_id', 'course_id'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('course_user');
	}

}
