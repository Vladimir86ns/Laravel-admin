<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ime')->nullable();
			$table->string('prezime')->nullable();
            $table->string('mesto')->nullable();
            $table->dateTime('godiste')->default(date('Y-m-d'));
            $table->integer('broj mobilnog')->nullable();
            $table->integer('broj kucnog')->nullable();
            $table->string('pozicija')->nullable();
            $table->text('permissions')->nullable();
            $table->dateTime('pocetak rada')->default(date('Y-m-d'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
