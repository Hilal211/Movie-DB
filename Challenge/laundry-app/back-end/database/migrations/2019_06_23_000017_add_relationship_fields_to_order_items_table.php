<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToOrderItemsTable extends Migration
{
    public function up()
    {
        Schema::table('order_items', function (Blueprint $table) {
            $table->unsignedInteger('order_id');
            $table->foreign('order_id', 'order_fk_131054')->references('id')->on('orders');
            $table->unsignedInteger('item_type_id');
            $table->foreign('item_type_id', 'item_type_fk_131055')->references('id')->on('items_types');
        });
    }
}
