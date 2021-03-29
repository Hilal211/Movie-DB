<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1561292910915ContentTagsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('content_tags')) {
            Schema::create('content_tags', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->nullable();
                $table->string('slug')->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('content_tags');
    }
}
