<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('product_id');
            $table->integer('provider_id');
            $table->decimal('total_cost');
            $table->integer('instalments');
            $table->string('visa_id');
            $table->decimal('visa_cost');
            $table->string('insurance_id');
            $table->decimal('insurance_cost');
            $table->string('bonus');
            $table->decimal('bonus_amount');
            $table->string('material');
            $table->decimal('material_cost');
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
        Schema::dropIfExists('orders');
    }
}
