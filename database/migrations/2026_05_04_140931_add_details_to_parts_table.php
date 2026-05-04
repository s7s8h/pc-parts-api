<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('parts', function (Blueprint $table) {
            $table->text('description')->nullable()->after('specification');
            $table->double('rating')->default(0)->after('description');
            $table->string('warranty')->nullable()->after('rating');
        });
    }

    public function down(): void
    {
        Schema::table('parts', function (Blueprint $table) {
            $table->dropColumn(['description', 'rating', 'warranty']);
        });
    }
};