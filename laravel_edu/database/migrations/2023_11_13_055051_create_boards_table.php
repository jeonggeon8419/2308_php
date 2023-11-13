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
        // migration 파일 생성 : php artisan make:migration 파일명
        // migration 실행(모든 migration 파일의 up()메소드를 실행) : php artisan migrate

        Schema::create('boards', function (Blueprint $table) {
            // 글번호, 제목, 내용, 작성일, 수정일, 삭제일자
            $table->id(); // big_int, pk, auto_increment
            $table->string('title', 50); // var_char(50), 기본 not null
            $table->string('content', 1000);
            $table->timestamps(); // created_at, updated_at 자동 생성, null허용
            $table->softDeletes(); // deleted_at, null 허용
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boards');
    }
};
