<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dat_lich', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('user');
            $table->string('name');
            $table->string('phone');
            $table->tinyInteger('age');
            $table->string('date');
            $table->string('time');
            $table->integer('doctor_name');
            $table->string('service')->nullable();
            $table->string('description')->nullable();
            $table->string('status')->nullable();
            $table->string('medical_history')->nullable();
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
        Schema::dropIfExists('dat_lich');
    }
};
