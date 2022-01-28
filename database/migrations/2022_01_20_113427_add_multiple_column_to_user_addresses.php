<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultipleColumnToUserAddresses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_addresses', function (Blueprint $table) {
            $table->string('fullname',255)->nullable();
            $table->string('email',320);
            $table->string('state',100)->nullable();
            $table->string('city',100)->nullable();
            $table->bigInteger('pincode')->nullable();
            $table->bigInteger('mobile');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_addresses', function (Blueprint $table) {
            $table->dropColumn(['fullname', 'email', 'state','city','pincode','mobile']);
        });
    }
}
