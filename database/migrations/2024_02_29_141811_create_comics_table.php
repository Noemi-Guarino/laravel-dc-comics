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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('src', 1024);
            $table->string('price', 10);
            $table->string('series', 255);
            $table->date('sale_date');
            $table->string('type', 20);
            $table->string('artists',600);
            $table->string('writers',600);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
