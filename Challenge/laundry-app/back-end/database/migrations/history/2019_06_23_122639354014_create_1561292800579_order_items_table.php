<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1561292800579OrderItemsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('order_items')) {
            Schema::create('order_items', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('order_id');
                $table->foreign('order_id', 'order_fk_131054')->references('id')->on('orders');
                $table->unsignedInteger('item_type_id');
                $table->foreign('item_type_id', 'item_type_fk_131055')->references('id')->on('items_types');
                $table->longText('details')->nullable();
                $table->string('status')->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
