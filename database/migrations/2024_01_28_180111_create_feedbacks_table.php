<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

	public function up()
	{
		Schema::create('feedbacks', function(Blueprint $table) {
			$table->id();
            $table->foreignId('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
			$table->enum('rate', array('1', '2', '3', '4', '5'));
			$table->text('comment');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('feedbacks');
	}
};
