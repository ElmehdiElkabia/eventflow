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
		Schema::create('payments', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->unsignedBigInteger('user_id');
			$table->decimal('amount', 10, 2);
			$table->enum('provider', ['stripe', 'paypal', 'cash', 'crypto']);
			$table->enum('status', ['pending', 'completed', 'failed', 'refunded']);
			$table->string('transaction_id', 255)->unique();
			$table->timestamp('created_at')->useCurrent();

			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('payments');
	}
};
