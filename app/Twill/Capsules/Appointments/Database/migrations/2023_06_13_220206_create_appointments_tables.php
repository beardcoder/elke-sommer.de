<?php

use App\Twill\Capsules\Appointments\Models\Appointment;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTables extends Migration
{
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $blueprint): void {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($blueprint);

            // feel free to modify the name of this column, but title is supported by default (you would need to specify the name of the column Twill should consider as your "title" column in your module controller if you change it)
            $blueprint->string('title', 200)->nullable();
            $blueprint->dateTime('date_start')->nullable();
            $blueprint->dateTime('date_end')->nullable();

            // your generated model and form include a description field, to get you started, but feel free to get rid of it if you don't need it

            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('appointment_registrations', function (Blueprint $blueprint): void {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($blueprint);

            $blueprint->string('name', 200)->nullable();
            $blueprint->string('email', 200)->nullable();
            $blueprint->foreignIdFor(Appointment::class)->nullable();
        });

        Schema::create('appointment_revisions', function (Blueprint $blueprint): void {
            createDefaultRevisionsTableFields($blueprint, 'appointment');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointment_revisions');
        Schema::dropIfExists('appointments');
        Schema::dropIfExists('appointment_registrations');
    }
}
