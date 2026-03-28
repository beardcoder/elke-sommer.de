<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            createDefaultTableFields($table);

            $table->string('title', 200);
            $table->text('description')->nullable();
            $table->string('address_street')->nullable();
            $table->string('address_city')->nullable();
            $table->string('address_state')->nullable();
            $table->string('address_postal_code')->nullable();
            $table->string('address_country', 2)->nullable();
            $table->dateTime('start_date');
            $table->dateTime('end_date')->nullable();
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

    public function down(): void
    {
        Schema::dropIfExists('event_revisions');
        Schema::dropIfExists('event_slugs');
        Schema::dropIfExists('events');
    }
};
