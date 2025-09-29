<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('ticket_types', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->unsignedBigInteger('event_id');
			$table->string('name', 100);
			$table->text('description');
			$table->decimal('price', 10, 2)->default(0.00);
			$table->integer('quantity');
			$table->dateTime('sales_start');
			$table->dateTime('sales_end');
			$table->timestamps();

			$table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('ticket_types');
	}
};
