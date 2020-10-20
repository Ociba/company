<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('company');
            $table->string('phone');
            $table->string('company_email');
            $table->string('item');
            $table->string('amount');
            $table->string('paid');
            $table->string('balance');
            $table->string('time_frame');
            $table->string('incharge');
            $table->string('reason');
            $table->enum('status',['active','pending','completed','deleted','suspended'])->default('pending');
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
        Schema::dropIfExists('payments');
    }
}
