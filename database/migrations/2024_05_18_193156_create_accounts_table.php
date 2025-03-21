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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('last_name');
            $table->text('email');
            $table->text('password', 255);
            $table->integer('phone_number');
            $table->text('address', 255);
            $table->boolean('admin')->default(false);
            $table->foreignId('offers_id')->constrained('offers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};


