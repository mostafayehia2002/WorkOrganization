<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

	public function up()
	{
		Schema::create('payments', function(Blueprint $table) {
			$table->id();
			$table->string('payment_name');
			$table->string('payment_account');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('payments');
	}
};
