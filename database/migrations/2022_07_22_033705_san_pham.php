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
        Schema::create('san_pham', function (Blueprint $table) {
            $table->id();
            $table->integer('loai_san_pham_id');
            $table->string('ten_san_pham');
            $table->string('anh_san_pham');
            $table->integer('so_luong');
            $table->integer('gia_san_pham');
            $table->integer('gia_khuyen_mai');
            $table->string('noi_dung_san_pham');
            $table->string('tieu_de_san_pham');
            $table->integer('trang_thai')->default(1);
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
    }
};
