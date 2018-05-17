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
            $table->integer('broj_mobilnog')->nullable();
            $table->integer('broj_kucnog')->nullable();
            $table->string('pozicija')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->text('permissions')->nullable();
            $table->dateTime('pocetak_rada')->default(date('Y-m-d'));
            $table->timestamps();
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
