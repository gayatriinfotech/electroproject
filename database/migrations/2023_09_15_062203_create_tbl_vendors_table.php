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
        Schema::create('tbl_vendors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('contact');
            $table->string('address');
            $table->string('store_name');
            $table->string('store_number');
            $table->string('total_chairs');
            $table->string('total_tables');
            $table->string('city');
            $table->string('state');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('status');
            $table->string('category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_vendors');
    }
};
