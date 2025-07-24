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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('artwork_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Painting::class, 'artwork_listing_id')
                ->constrained()
                ->onDelete('cascade');
            $table->foreignIdFor(\App\Models\Tag::class)->constrained()
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('artwork_tags');
    }
};
