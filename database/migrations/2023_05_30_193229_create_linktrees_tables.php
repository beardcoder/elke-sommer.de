<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinktreesTables extends Migration
{
    public function up()
    {
        Schema::create('linktrees', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            // feel free to modify the name of this column, but title is supported by default (you would need to specify the name of the column Twill should consider as your "title" column in your module controller if you change it)
            $table->string('title', 200)->nullable();

            // your generated model and form include a description field, to get you started, but feel free to get rid of it if you don't need it
            $table->text('name')->nullable();
            $table->text('phone')->nullable();
            $table->text('email')->nullable();
            $table->text('whatsapp')->nullable();
            $table->text('description')->nullable();
            $table->json('links')->nullable();

            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('linktree_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'linktree');
        });
    }

    public function down()
    {
        Schema::dropIfExists('linktree_revisions');
        Schema::dropIfExists('linktrees');
    }
}
