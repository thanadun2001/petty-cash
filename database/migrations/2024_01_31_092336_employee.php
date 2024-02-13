<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('id');
            $table->string('EmpID');
            $table->string('Name');
            $table->string('LastName');
            $table->string('GCompany');
            $table->string('Company');
            $table->string('GDepartment');
            $table->string('Department');
            $table->string('Division');
            $table->string('Section');
            $table->string('PosSub');
            $table->string('PosMain1');
            $table->string('PosMain2');
            $table->string('SLName');
            $table->string('Email');
            $table->integer('Priority'); // Corrected typo in column name
            $table->string('TypeEmpName');
            $table->integer('TypeEmpCode');
            $table->string('BORNDATE');
            $table->string('LineToken');
            $table->enum('PathEmLn', ['EM', 'LN'])->default('EM');
            $table->timestamps(); // Adds 'created_at' and 'updated_at' columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('employee');
    }
};
