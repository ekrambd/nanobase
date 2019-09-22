<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->bigIncrements('project_id');
            $table->string('product_title');
            $table->string('sub_title');
            $table->string('product_image');
            $table->string('bg_image')->nullable();
            $table->string('location');
            $table->string('sq_m');
            $table->string('year');
            $table->string('price');
            $table->string('head');
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
        Schema::dropIfExists('project');
    }
}
