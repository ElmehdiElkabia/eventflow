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
		Schema::create('event_reviews', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->unsignedBigInteger('event_id');
			$table->unsignedBigInteger('user_id');
			$table->integer('rating');
			$table->text('comment');
			$table->timestamp('created_at')->useCurrent();

			$table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

		});
		DB::statement('ALTER TABLE event_reviews ADD CONSTRAINT rating_check CHECK (rating >= 1 AND rating <= 5)');
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('event_reviews');
	}
};
