<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestCasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('test_cases', function(Blueprint $table)
		{


			$table->increments('TestCaseID');
			$table->string('TestCaseName');
			$table->string('Scenario');
			$table->string('TestSteps');
			$table->string('ExpectedOutcome');
			$table->string('ActualOutcome');
			$table->string('Pass_Fail');
			$table->string('Comments');
			$table->integer('uid');
			$table->string('user_story_id');
			$table->string('user_story');
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
		Schema::drop('test_cases');
	}

}
