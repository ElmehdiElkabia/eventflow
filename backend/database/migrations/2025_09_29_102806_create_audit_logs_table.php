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
		Schema::create('audit_logs', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->unsignedBigInteger('user_id');
			$table->string('action', 150);
			$table->string('entity_type', 100);
			$table->unsignedBigInteger('entity_id');
			$table->string('ip_address', 50);
			$table->text('user_agent');
			$table->timestamp('created_at')->useCurrent();

			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('audit_logs');
	}
};
