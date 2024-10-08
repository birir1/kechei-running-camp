<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Assuming users table exists
            $table->foreignId('event_id')->constrained()->onDelete('cascade'); // Assuming events table exists
            $table->timestamp('booking_date');
            $table->string('status')->default('pending'); // e.g., pending, confirmed, canceled
            $table->text('comments')->nullable(); // Optional comments
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}