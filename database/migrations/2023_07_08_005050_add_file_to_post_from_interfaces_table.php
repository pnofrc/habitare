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
        Schema::table('post_from_interfaces', function (Blueprint $table) {
            $table->string('file')->after('post');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('post_from_interfaces', function (Blueprint $table) {
            $table->dropColumn('file');
        });
    }
};
