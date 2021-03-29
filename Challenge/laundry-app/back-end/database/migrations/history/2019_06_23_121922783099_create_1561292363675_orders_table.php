<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1561292363675OrdersTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('orders')) {
            Schema::create('orders', function (Blueprint $table) {
                $table->increments('id');
                $table->longText('details')->nullable();
                $table->boolean('priority')->default(0)->nullable();
                $table->unsignedInteger('customer_id');
                $table->foreign('customer_id', 'customer_fk_131042')->references('id')->on('users');
                $table->string('order_status')->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
