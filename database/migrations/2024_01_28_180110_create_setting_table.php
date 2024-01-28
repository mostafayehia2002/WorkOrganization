<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

	public function up()
	{
		Schema::create('setting', function(Blueprint $table) {
			$table->id();
			$table->string('app_name');
			$table->text('descriptions');
			$table->decimal('subscribe_price');
			$table->string('free_day');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('setting');
	}
};
