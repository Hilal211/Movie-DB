<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1561292564750ItemsTypesTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('items_types')) {
            Schema::create('items_types', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->decimal('price', 15, 2);
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('items_types');
    }
}
