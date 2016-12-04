<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     * 考生提出的问题
     * @return void
     */
    public function up()
    {
        Schema::create('issues' , function (Blueprint $table){
            $table->increments('id');
            $table->string('title')->comment('标题');
            $table->string('description')->comment('问题的详细描述');
            $table->integer('comment_id')->default(0)->comment('回复');
            $table->integer('wx_user_id')->default(0)->comment('用户id,默认为0,表示匿名');
            //$table->integer('essence')->default(0)->comment('给问题添加精华');
            //$table->ipAddress('ip')->comment('用户ip');
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
        //
        Schema::drop('issues');
    }
}
