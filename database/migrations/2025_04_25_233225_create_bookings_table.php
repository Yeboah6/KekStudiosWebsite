<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table -> string('booking_id');
            $table -> string('service');
            $table -> string('work');
            $table -> string('name');
            $table -> string('email');
            $table -> string('phone');
            $table -> string('company');
            $table -> string('project_title');
            $table -> string('project_description');
            $table -> string('budget');
            $table -> string('deadline');
            $table -> string('reference') -> nullable();
            $table -> string('additional_notes') -> nullable();
            $table -> string('terms');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
