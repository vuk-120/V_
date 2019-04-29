<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToShareTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('share', function(Blueprint $table)
		{
			$table->foreign('email', 'share_ibfk_1')->references('email')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('postId', 'share_ibfk_2')->references('id')->on('posts')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('commentId', 'share_ibfk_3')->references('id')->on('comments')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('share', function(Blueprint $table)
		{
			$table->dropForeign('share_ibfk_1');
			$table->dropForeign('share_ibfk_2');
			$table->dropForeign('share_ibfk_3');
		});
	}

}
