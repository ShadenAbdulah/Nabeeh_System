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
        DB::statement('SET time_zone = "+03:00"');
        Schema::create('samples', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->integer('age');
            $table->string('gender');
            $table->string('type');
            $table->string('another_disorder')->nullable();
            $table->string('another_disorder_name')->nullable();
            $table->string('supervisor_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('samples');
    }
};
