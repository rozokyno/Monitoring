<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('ip');
            $table->string('mac'); 
            $table->string('jenis')->nullable(); 
            $table->enum('status', ['online', 'offline'])->default('offline'); 
            $table->timestamp('waktu_terhubung')->nullable(); 
            $table->bigInteger('bandwidth')->default(0); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('computers');
    }
};
