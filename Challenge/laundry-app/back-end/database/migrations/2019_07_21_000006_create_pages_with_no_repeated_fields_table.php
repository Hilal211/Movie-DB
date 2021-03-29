<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatepagesWithNoRepeatedFieldsTable extends Migration
{
    public function up()
    {
        Schema::create('pages_with_no_repeated_fields', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('history')->nullable();
            $table->longText('short_history')->nullable();
            $table->string('about_title')->nullable();
            $table->string('about_subtitle')->nullable();
            $table->string('footer_description')->nullable();
            $table->string('social_media_facebook')->nullable();
            $table->string('social_media_twitter')->nullable();
            $table->string('social_media_instagram')->nullable();
            $table->string('social_media_youtube')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
