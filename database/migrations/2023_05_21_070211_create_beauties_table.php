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
        Schema::create('beauties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_beauty_id')->constrained('category_beauties')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('gambar_beauty');
            $table->string('kode_beauty');
            $table->string('nama_beauty');
            $table->string('stok_beauty');
            $table->string('harga_beauty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beauties');
    }
};
