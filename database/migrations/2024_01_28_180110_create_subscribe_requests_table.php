<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

	public function up()
	{
		Schema::create('subscribe_requests', function(Blueprint $table) {
			$table->id();
            $table->foreignId('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('payment_id')->references('id')->on('payments')
                ->onDelete('cascade')
                ->onUpdate('cascade');
			$table->enum('subscribe_type', array('month', 'year'));
			$table->decimal('price');
			$table->enum('status', array('pending', 'accept', 'reject'));
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('subscribe_requests');
	}
};
