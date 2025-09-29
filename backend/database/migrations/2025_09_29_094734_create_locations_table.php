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
		Schema::create('locations', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name', 150);
			$table->string('address', 255);
			$table->string('city', 100);
			$table->string('country', 100);
			$table->decimal('latitude', 10, 8)->nullable();
			$table->decimal('longitude', 11, 8)->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('locations');
	}
};
