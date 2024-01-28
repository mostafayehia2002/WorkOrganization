<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

public function up()
{
Schema::create('invoices', function(Blueprint $table) {
$table->id();
$table->foreignId('project_id')->references('id')->on('projects')
->onDelete('cascade')
->onUpdate('cascade');
$table->string('invoice_name');
$table->decimal('price');
$table->text('descriptions');
$table->timestamps();
});
}

public function down()
{
Schema::drop('invoices');
}
};
