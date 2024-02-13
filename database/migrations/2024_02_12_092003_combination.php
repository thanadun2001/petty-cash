<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('combination', function (Blueprint $table) {
            $table->string('COMP_ID');
            $table->string('GEN_ID_IT');
            $table->string('SEGMENT1');
            $table->string('SEGMENT2');
            $table->string('SEGMENT3');
            $table->string('SEGMENT4');
            $table->string('SEGMENT5');
            $table->string('SEGMENT6');
            $table->string('SEGMENT7');
            $table->string('SEGMENT8');
            $table->string('SEGMENT9');
            $table->string('FLAG');
            $table->string('ENDDATE');
    
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('combination');
    }
};
