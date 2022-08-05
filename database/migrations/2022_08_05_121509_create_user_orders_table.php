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
        Schema::create('user_orders', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('sending_from_country')->nullable();
            $table->string('sending_from_currency')->nullable();

            $table->string('receiver_get_country')->nullable();
            $table->string('receiver_get_currency')->nullable();

            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();

            $table->string('type_pay')->nullable();
            $table->string('type_transaction')->nullable();;
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
        Schema::table('user_orders',function (Blueprint $table) {
            $table->dropForeign('user_orders_user_id_foreign');
            $table->dropColumn('user_id');
        });
        Schema::dropIfExists('user_orders');
    }
};
