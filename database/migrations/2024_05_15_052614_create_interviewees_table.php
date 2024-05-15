<?php

use App\Models\Category;
use App\Models\Socialmedia;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('interviewees', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('secondName')->nullable();
            $table->string('image');
            $table->foreignIdFor(Category::class);
            $table->foreignIdFor(Socialmedia::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interviewees');
    }
};
