<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBdatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bdatas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('bill_type');
            $table->text('bill_code');
            $table->text('bill_number');
            $table->date('bill_date');
            $table->float('bill_price');
            $table->char('bill_check_number',6);
            $table->text('bill_owner');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bdatas');
    }
}
