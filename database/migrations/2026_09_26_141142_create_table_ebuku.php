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
        Schema::create('ebuku', function (Blueprint $table) {
            $table->id();
            $table->string("judul");
            $table->string("nama_penulis");
            $table->string("nama_peminjam");
            // $table->string("nama_peminjam")->unique();
            // $table->integer("test");
            $table->date("tarikh_pinjaman");
            $table->date("tarikh_pulangan");
            $table->string("status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ebuku');
    }
};
