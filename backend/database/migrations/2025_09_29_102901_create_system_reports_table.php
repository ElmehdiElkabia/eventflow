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
		Schema::create('system_reports', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name', 100);
			$table->unsignedBigInteger('generated_by');
			$table->enum('report_type', ['sales', 'attendance', 'engagement']);
			$table->string('file_path', 255);
			$table->timestamp('created_at')->useCurrent();

			$table->foreign('generated_by')->references('id')->on('users')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('system_reports');
	}
};
