<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReleaseBacklogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('release_backlogs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('ProjectName');
			$table->string('acc_name');
			$table->date('release_date');
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
		Schema::drop('release_backlogs');
	}

}
