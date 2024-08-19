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
        Schema::create('tbl_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('tbl_user');
            $table->integer('total_item');
            $table->decimal('total_price', 10, 2);
            // $table->enum('status', ['processing', 'delivered', 'cancelled']);
            $table->enum('payment_status', ['not_paid', 'paid']);
            $table->text('shipping_address');
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
        Schema::table('tbl_orders', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::dropIfExists('tbl_orders');
    }
};
