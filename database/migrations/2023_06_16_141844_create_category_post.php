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
        Schema::create('category_post', function (Blueprint $table) {
            $table->integer('post_id')->unsigned();

            $table->integer('category_id')->unsigned();
        
            $table->foreign('post_id')->references('id')->on('posts')
        
                ->onDelete('cascade');
        
            $table->foreign('category_id')->references('id')->on('categories')
        
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_post');
    }
};
