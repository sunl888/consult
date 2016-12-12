<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWxUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wx_users' , function (Blueprint $table){
            $table->increments('id');
            /**从微信中获取**/
            /*$table->string('openid')->comment('普通用户的标识，对当前公众号唯一');
            $table->string('nickname')->comment('用户昵称');
            $table->string('headimgurl')->comment('用户头像url');
            $table->integer('is_init')->default(1)->comment('是否第一次登录');*/

            $table->string('name')->comment('姓名')->nullable();
            $table->string('sex')->comment('用户性别')->nullable();
            $table->string('phone')->comment('手机号码')->nullable();
            $table->string('province')->comment('所在省份')->nullable();
            $table->string('city')->comment('所在城市')->nullable();
            $table->string('area')->comment('所在地区')->nullable();
            //$table->string('science')->comment('文科or理科')->nullable();
            $table->float('course')->comment('考试成绩')->nullable();
            $table->string('old_school')->comment('毕业学校')->nullable();
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
        Schema::drop('wx_users');
    }
}
