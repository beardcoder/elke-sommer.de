<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            // feel free to modify the name of this column, but title is supported by default (you would need to specify the name of the column Twill should consider as your "title" column in your module controller if you change it)
            $table->string('title', 200);
            $table->text('description')->nullable();
            $table->string('address_street')->nullable();
            $table->string('address_city')->nullable();
            $table->string('address_state')->nullable();
            $table->string('address_postal_code')->nullable();
            $table->string('address_country', 2)->nullable();
            $table->dateTime('start_date'); // Datum und Uhrzeit
            $table->dateTime('end_date')->nullable(); // Datum und Uhrzeit
            $table->string('event_status')->default('EventScheduled');
            $table->string('attended_mode')->default('OfflineEventAttendanceMode');
            $table->integer('position')->unsigned()->nullable();
        });

        Schema::create('event_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'event');
        });

        Schema::create('event_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'event');
        });
    }

    public function down()
    {
        Schema::dropIfExists('event_revisions');
        Schema::dropIfExists('event_slugs');
        Schema::dropIfExists('events');
    }
};
