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
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->date('date');
            $table->string('time');
            $table->string('duration')->nullable();
            $table->integer('attendees')->default(0);
            $table->integer('max_attendees')->nullable();
            $table->enum('status', ['upcoming', 'ongoing', 'completed', 'cancelled'])->default('upcoming');
            $table->string('location');
            $table->string('address')->nullable();
            $table->decimal('price', 8, 2)->default(0);
            $table->string('category')->nullable();
            $table->float('rating', 2, 1)->default(0);
            $table->integer('reviews')->default(0);
            $table->unsignedBigInteger('organizer_id');
            $table->timestamps();

            $table->foreign('organizer_id')->references('id')->on('users')->onDelete('cascade');
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
