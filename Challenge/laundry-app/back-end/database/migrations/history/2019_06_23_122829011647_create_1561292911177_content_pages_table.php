<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1561292911177ContentPagesTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('content_pages')) {
            Schema::create('content_pages', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title')->nullable();
                $table->longText('page_text')->nullable();
                $table->longText('excerpt')->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('content_pages');
    }
}
