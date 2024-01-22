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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('email', 100)->unique();
            $table->string('phone', 100)->nullable();
            $table->string('profile_image', 150)->nullable();
            $table->enum('gender', [1,2,3])->comment('1 for male, 2 for female and 3 for other');
            $table->enum('user_type', [1,2,3])->default(2)->comment('1 for admin , 2 for peoduct manager and 3 for employee');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
