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
        Schema::create('project_infos', function (Blueprint $table) {
            $table->id();
            $table -> string('project_id');
            $table->foreignId('client_infos_id')->constrained()->onDelete('cascade');
            $table->string('service_type');
            $table->string('category');
            $table->string('order_service');
            $table->string('project_title');
            $table->text('project_description');
            $table->string('attachment')->nullable();
            $table->string('budget')->nullable();
            $table->date('deadline')->nullable();
            $table->string('out_source_expert') -> nullable();
            $table->boolean('agreement')->default(0);
            $table->text('add_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_infos');
    }
};
