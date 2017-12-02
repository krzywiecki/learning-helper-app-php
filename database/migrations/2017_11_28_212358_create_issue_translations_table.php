<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssueTranslationsTable extends Migration
{

    public function up()
    {
        Schema::create('issues_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('issue_id')->unsigned();
            $table->string('translation', 255);
            $table->char('lang', 2);
            $table->timestamps();

            $table->unique(['issue_id', 'translation']);
            $table->index('issue_id');
            $table->foreign('issue_id')->references('id')->on('issues');
        });
//
//        Schema::table('issues', function (Blueprint $table) {
//            $table->foreign('id')
//                ->references('issue_id')->on('issues_translations')
//                ->onDelete('cascade');
//        });
    }

    public function down()
    {
//        Schema::table('issues', function (Blueprint $table) {
//            $table->dropForeign('issues_id_foreign');
//        });

        Schema::dropIfExists('issues_translations');
    }
}
