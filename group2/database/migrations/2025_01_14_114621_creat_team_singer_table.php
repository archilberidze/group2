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

        Schema::create('team_singer', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id');
            $table->foreignId('singer_id');
            $table->timestamps();
            $table->unique(['team_id','singer_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
