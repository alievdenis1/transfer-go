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
        Schema::table('users', function($table) {
            $table->integer('min_payment');
            $table->string('last_name');
            $table->timestamp('date_birth')->nullable();
            $table->string('phone_number');
            $table->string('city');
            $table->string('Postcode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
            $table->dropColumn('min_payment');
            $table->dropColumn('last_name');
            $table->dropColumn('date_birth');
            $table->dropColumn('phone_number');
            $table->dropColumn('city');
            $table->dropColumn('Postcode');
        });
    }
};
