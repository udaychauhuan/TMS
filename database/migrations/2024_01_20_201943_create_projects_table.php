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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('p_name',100);
            $table->text('description');
            $table->enum('p_status', [1,2,3])->default(1)->comment('1 for pending , 2 for in-prograce and 3 for complete');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('p_image')->nullable();
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('manager_id');
            $table->string('assigned_users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
