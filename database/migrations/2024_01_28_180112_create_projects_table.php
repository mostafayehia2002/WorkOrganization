<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('name');
            $table->text('details');
            $table->decimal('costs');
            $table->string('owner_name');
            $table->bigInteger('owner_phone');
            $table->string('owner_address');
            $table->date('start_at');
            $table->date('end-at');
            $table->bigInteger('photo_id')->unsigned();
            $table->enum('status', array('pending', 'starting', 'completed', 'reject'));
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('projects');
    }
};
