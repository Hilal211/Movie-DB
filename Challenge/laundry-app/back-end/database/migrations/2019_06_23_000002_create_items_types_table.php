<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTypesTable extends Migration
{
    public function up()
    {
        Schema::create('items_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->decimal('price', 15, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
