<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('country', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Artisan::call('db:seed', ['class' => 'countryTable']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
