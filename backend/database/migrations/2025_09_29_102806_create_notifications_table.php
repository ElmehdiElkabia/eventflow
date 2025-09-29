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
		Schema::create('notifications', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->unsignedBigInteger('user_id');
			$table->string('title', 150);
			$table->text('body');
			$table->enum('type', ['system', 'event_update', 'reminder', 'payment']);
			$table->boolean('is_read')->default(false);
			$table->timestamp('created_at')->useCurrent();

			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('notifications');
	}
};
