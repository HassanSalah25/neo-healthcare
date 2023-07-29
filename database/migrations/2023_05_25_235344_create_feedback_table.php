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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients');
            $table->foreignId('doctor_id')->constrained('doctors');
            $table->foreignId('service_id')->constrained('appointment');
            $table->foreignId('branch_id')->constrained('branches');
            $table->enum('first',[1,2,3])->default(1);
            $table->enum('second',[1,2,3])->default(1);
            $table->enum('third',[1,2,3])->default(1);
            $table->enum('fourth',[1,2,3])->default(1);
            $table->enum('fifth',[1,2,3])->default(1);
            $table->enum('sixth',[1,2,3])->default(1);
            $table->enum('seventh',[1,2,3])->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
