<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->longText('message');
            $table->string('email');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
