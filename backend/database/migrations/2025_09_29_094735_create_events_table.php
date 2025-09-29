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
		Schema::create('events', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->unsignedBigInteger('organizer_id');
			$table->string('title', 150);
			$table->string('slug', 180)->unique(); // SEO friendly URL
			$table->text('description');
			$table->unsignedBigInteger('category_id');
			$table->unsignedBigInteger('location_id');
			$table->dateTime('start_datetime');
			$table->dateTime('end_datetime');
			$table->integer('capacity')->nullable(); // max attendees
			$table->string('banner', 255);
			$table->enum('status', ['draft', 'published', 'cancelled', 'archived'])->default('draft');
			$table->timestamps();
			$table->softDeletes();

			// Foreign keys
			$table->foreign('organizer_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('category_id')->references('id')->on('event_categories')->onDelete('cascade');
			$table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('events');
	}
};
