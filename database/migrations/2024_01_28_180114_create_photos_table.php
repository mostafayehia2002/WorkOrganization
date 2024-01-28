<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

	public function up()
	{
		Schema::create('photos', function(Blueprint $table) {
			$table->id();
			$table->string('photo_name');
            $table->morphs('photoable');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('photos');
	}
};
