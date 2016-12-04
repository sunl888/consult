<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     * 回复考生的问题
     * @return void
     */
    public function up()
    {
        Schema::create('comments' , function (Blueprint $table){
            $table->increments('id');
            $table->string('answer')->comment('对某个问题的回复');
            $table->integer('issue_id');
            $table->integer('uid')->comment('回复者信息');
            $table->integer('praise')->comment('赞');
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
        //
        Schema::drop('comments');
    }
}
