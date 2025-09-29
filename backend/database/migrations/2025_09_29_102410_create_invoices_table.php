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
		Schema::create('invoices', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->unsignedBigInteger('payment_id');
			$table->string('invoice_number', 50)->unique();
			$table->string('billing_address', 255);
			$table->string('vat_number', 50)->nullable();
			$table->string('pdf_path', 255);
			$table->timestamp('created_at')->useCurrent();

			$table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('invoices');
	}
};
