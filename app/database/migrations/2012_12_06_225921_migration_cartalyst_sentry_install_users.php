<?php
/**
 * Part of the Sentry package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Sentry
 * @version    2.0.0
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011 - 2013, Cartalyst LLC
 * @link       http://cartalyst.com
 */

use Illuminate\Database\Migrations\Migration;

class MigrationCartalystSentryInstallUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
			$table->increments('id');
			$table->string('email');
			$table->string('password');
			$table->text('permissions')->nullable();
			$table->boolean('activated')->default(0);
			$table->string('activation_code')->nullable();
			$table->timestamp('activated_at')->nullable();
			$table->timestamp('last_login')->nullable();
			$table->string('persist_code')->nullable();
			$table->string('reset_password_code')->nullable();
			$table->string('title')->nullable();
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->date('birth_date')->nullable();
			$table->string('gender',1)->nullable();
			$table->text('home_address')->nullable();
			$table->string('home_postal_code')->nullable();
			$table->integer('home_country_id')->nullable();
			$table->text('postal_address')->nullable();
			$table->string('postal_postal_code')->nullable();
			$table->integer('postal_country_id')->nullable();
			$table->string('tel')->nullable();
			$table->string('mobile')->nullable();
			$table->string('fax')->nullable();
			$table->string('last_school')->nullable();
			$table->string('last_school_year')->nullable();
			$table->string('last_school_grade')->nullable();
			$table->integer('last_school_country_id')->nullable();
			$table->string('last_institution')->nullable();
			$table->integer('last_institution_country_id')->nullable();
			$table->string('course_name')->nullable();
			$table->string('course_start')->nullable();
			$table->string('course_end')->nullable();
			$table->string('course_duration')->nullable();
			$table->text('additional_courses')->nullable();
			$table->timestamps();


			// We'll need to ensure that MySQL uses the InnoDB engine to
			// support the indexes, other engines aren't affected.
			$table->engine = 'InnoDB';
			$table->unique('email');
			$table->index('activation_code');
			$table->index('reset_password_code');
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
