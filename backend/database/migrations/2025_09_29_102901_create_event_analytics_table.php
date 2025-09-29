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
		Schema::create('event_analytics', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->unsignedBigInteger('event_id');
			$table->integer('total_visits')->default(0);
			$table->integer('tickets_sold')->default(0);
			$table->integer('tickets_checked_in')->default(0);
			$table->decimal('revenue', 10, 2)->default(0.00);
			$table->timestamp('last_updated')->useCurrent();

			$table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('event_analytics');
	}
};
