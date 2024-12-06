<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('sucursals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->unsignedBigInteger('child_id')->nullable();
            $table->timestamps();

            $table->foreign('parent_id')->references('id')->on('agencias')->onDelete('cascade');
            $table->foreign('child_id')->references('id')->on('agencias')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sucursals');
    }
};
