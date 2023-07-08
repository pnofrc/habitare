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
        Schema::create('post_from_interfaces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lat');
            $table->string('lng');
            $table->boolean('published');
            $table->text('post');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_from_interfaces');
    }
};
