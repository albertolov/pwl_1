<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    
     public function up(): void
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('NIP')->unique();
            $table->string('NIDN')->unique();
            $table->string('Pendidikan_Terakhir')->nullable();
            $table->date('jurusan_id')->nullable();
            $table->date('Tempat_Lahir')->nullable();
            $table->date('Tanggal_Lahir')->nullable();
            $table->text('alamat');
            $table->timestamps();
          
        });   
    }

    
    public function down(): void
    {
       
    }
};
