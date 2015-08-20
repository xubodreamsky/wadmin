<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMemberTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		//
		Schema::create('member', function (Blueprint $table) {
				$table->increments('id');
				$table->string('account')->unique();
				$table->string('name');
				$table->string('nick')->unique();
				$table->string('email')->unique();
				$table->string('password', 60);
				$table->integer('age');
				$table->string('mobile')->default('')->unique();
				$table->boolean('gender')->default(0);
				$table->boolean('state')->default(1);
				$table->timestamps();
                $table->softDeletes();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		//
		Schema::drop('member');
	}
}
