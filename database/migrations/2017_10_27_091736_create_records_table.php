<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('branch_id');
            $table->integer('month_id');
            $table->integer('year_id');
            $table->integer('tithe')->nullable();
            $table->integer('nationalOffering')->nullable();
            $table->integer('localOffering')->nullable();
            $table->integer('bankReport')->nullable();
            $table->integer('status');
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
        Schema::dropIfExists('records');
    }
}
