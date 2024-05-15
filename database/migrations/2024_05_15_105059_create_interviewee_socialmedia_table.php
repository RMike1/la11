<?php

use App\Models\Interviewee;
use App\Models\Socialmedia;
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
        Schema::create('interviewee_socialmedia', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Interviewee::class);
            $table->foreignIdFor(Socialmedia::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interviewee_socialmedia');
    }
};
