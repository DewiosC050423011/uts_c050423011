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
        Schema::create('penyalur_bantuans', function (Blueprint $table) {
            $table->id();
            $table->string('id_bantuan');
            $table->date('tanggal_penyaluran');
            $table->string('jumlah_bantuan');
            $table->string('keterangan');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyalur_bantuans');
    }
};
