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
        Schema::create('tbl_user', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('username');
            $table->string('password');
            $table->string('email');
            $table->string('nomor');
            $table->string('gender');
            $table->date('tanggal_lahir');
            $table->string('user_picture');
            $table->foreign('role_id')->references('id')->on('tbl_role');
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
        Schema::dropIfExists('tbl_user');
    }
};
