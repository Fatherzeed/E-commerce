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
        Schema::create('tbl_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('tbl_orders');
            // $table->enum('payment_method', ['credit_card', 'bank_transfer', 'cash_on_delivery']);
            $table->string('verified_transfer');
            // $table->enum('status', ['pending', 'completed', 'failed']);
            $table->decimal('amount', 10, 2);
            $table->timestamp('transaction_date')->nullable();
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
        Schema::dropIfExists('tbl_payments');
    }
};
