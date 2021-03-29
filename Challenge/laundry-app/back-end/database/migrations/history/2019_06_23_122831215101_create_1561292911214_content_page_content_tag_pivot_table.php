<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1561292911214ContentPageContentTagPivotTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('content_page_content_tag')) {
            Schema::create('content_page_content_tag', function (Blueprint $table) {
                $table->unsignedInteger('content_page_id');
                $table->foreign('content_page_id', 'content_page_id_fk_131089')->references('id')->on('content_pages');
                $table->unsignedInteger('content_tag_id');
                $table->foreign('content_tag_id', 'content_tag_id_fk_131089')->references('id')->on('content_tags');
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('content_page_content_tag');
    }
}
