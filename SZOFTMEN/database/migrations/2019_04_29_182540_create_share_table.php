<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShareTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('share', function(Blueprint $table)
		{
			$table->string('email');
			$table->integer('postId')->unsigned()->index('postId');
			$table->date('published');
			$table->timestamps();
			$table->primary(['email','postId','commentId']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('share');
	}

}
