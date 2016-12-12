<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionTable extends Migration
{
    /**
     * Run the migrations.
     * 三级省市联动
     * @return void
     */
    public function up()
    {
        Schema::create('regions' , function (Blueprint $table){
            $table->increments('id');
            $table->integer('zone_id')->comment('区域号');
            $table->string('name')->comment('地区的名字');
            $table->integer('parent_id')->comment('父级id');
            $table->integer('level')->comment('级别:1,2,3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('region');
    }
}
