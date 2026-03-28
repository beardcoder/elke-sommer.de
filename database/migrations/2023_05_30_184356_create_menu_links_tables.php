<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('menu_links', function (Blueprint $table) {
            createDefaultTableFields($table);

            $table->integer('position')->unsigned()->nullable();
            $table->text('title')->nullable();
            $table->nestedSet();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('menu_links');
    }
};
