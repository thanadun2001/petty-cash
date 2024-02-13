<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTable extends Migration
{
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {

		$table->integer('COMP_NO',3);
		$table->string('COMP_NAME',40);

        });
    }

    public function down()
    {
        Schema::dropIfExists('company');
    }
}