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
        Schema::create('tbl_address', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('tbl_user');
            $table->text('address_label');
            $table->string('full_address');
            $table->string('note_optional');
            $table->string('receiver_name');
            $table->string('phone_number');
            $table->boolean('is_primary')->default(false);
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
        Schema::dropIfExists('tbl_address');
    }
};
