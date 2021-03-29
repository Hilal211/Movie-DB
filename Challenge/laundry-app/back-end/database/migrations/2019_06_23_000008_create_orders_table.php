<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('details')->nullable();
            $table->boolean('priority')->default(0)->nullable();
            $table->string('order_status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
