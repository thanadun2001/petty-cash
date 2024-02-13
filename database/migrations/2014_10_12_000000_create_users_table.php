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
            $table->string('name');
            $table->string('lname');
            $table->string('user')->unique();
           // $table->timestamp('user_verified_at')->nullable();
            $table->string('password');
            //$table->rememberToken();
            //0 =views; 1 = User; 2 = AdminLe1; 3 = AdminLe2
            $table->tinyInteger("role")->default(0);
            $table->string('dept');
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
