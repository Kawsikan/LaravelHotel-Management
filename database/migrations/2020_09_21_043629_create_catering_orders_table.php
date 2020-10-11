<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCateringOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catering_orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->bigInteger('customer_id')->unsigned();
            $table->bigInteger('catering_package_id')->unsigned();
            $table->dateTime('date_time');
            $table->string('location');
            $table->string('guests');
            $table->double('amount');

            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('catering_package_id')->references('id')->on('catering_packages');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catering_orders');
    }
}
