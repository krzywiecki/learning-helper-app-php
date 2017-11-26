<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesTable extends Migration
{

    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('issue', 255);
            $table->char('lang', 2);
            $table->timestamps();

            $table->unique(['issue', 'lang']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('issues');
    }
}
