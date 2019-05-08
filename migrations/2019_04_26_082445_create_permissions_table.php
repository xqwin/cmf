<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('菜单名称');
            $table->string('app',20);
            $table->string('controller',20);
            $table->string('as',32)->default('')->comment('路由别名');
            $table->string('methods',180);
            $table->string('middleware',32)->default('')->comment('中间件');
            $table->string('md5',32)->comment('路由md5值');
            $table->integer('sort')->default(0)->comment('排序');
            $table->string('param')->default('')->comment('其他参数');
            $table->string('namespaceall')->comment('完整命名空间');
            $table->string('uri')->comment('URL');
            $table->tinyInteger('type')->default(0)->comment('菜单类型0可访问链接,1有界面的链接,2无界面可访问链接');
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
        Schema::dropIfExists('permissions');
    }
}
