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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->unsignedBigInteger('inspection_id');
            $table->unsignedBigInteger('spare_part_id');
<<<<<<< HEAD
            $table->integer('items');
=======

           $table->integer('count');
           $table->unsignedBigInteger('user_id');
>>>>>>> b06979460b5d85a799224e680fed74a397405df2
            $table->softDeletes();
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
        Schema::dropIfExists('reports');
    }
};
