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
        Schema::create('executives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photo');
            $table->string('name');
            $table->string('program');
            $table->string('contact');
            $table->string('office');
            $table->unsignedInteger('year_group_id');
            $table->foreign('year_group_id')
                ->references('id')
                ->on('year_groups')
                ->onDelete('cascade');
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
        Schema::dropIfExists('executives');
    }
};
