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
        Schema::create('weekly_activities', function (Blueprint $table) {
            $table->increments("id");
            $table->string("image")->nullable();
            $table->string("service");
            $table->string("day");
            $table->string("time");
            $table->integer("location_id")
                ->unsigned();
            $table->foreign("location_id")
                ->references("id")
                ->on("locations")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weekly_activities');
    }
};
