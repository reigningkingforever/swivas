<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reference');
            $table->unsignedBigInteger('user_id'); //the sender
            $table->unsignedBigInteger('order_id'); //the order
            $table->unsignedBigInteger('coupon_id')->nullable(); //if coupon was applied to payment
            $table->string('description')->nullable();
            $table->string('currency');
            $table->double('amount')->default(0); 
            $table->string('method'); //card, bank, ussd  
            $table->string('status'); // successful, failed, cancelled 
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('coupon_id')->references('id')->on('coupons');
        });
    }

    /**
     * Reverse the migrations.
     *
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
