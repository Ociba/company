<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpendituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenditures', function (Blueprint $table) {
            $table->id();
            $table->string('item');
            $table->string('quantity');
            $table->string('unit');
            $table->string('particulars');
            $table->string('rate');
            $table->string('amount');
            $table->string('person');
            $table->string('date');
            $table->string('sign')->nullable();
            $table->enum('status',['paid','active','pending'])->default('paid');
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
        Schema::dropIfExists('expenditures');
    }
}
