<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('linktrees', function (Blueprint $table) {
            createDefaultTableFields($table);

            $table->string('title', 200)->nullable();
            $table->text('name')->nullable();
            $table->text('phone')->nullable();
            $table->text('email')->nullable();
            $table->text('whatsapp')->nullable();
            $table->text('description')->nullable();
            $table->json('links')->nullable();
        });

        Schema::create('linktree_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'linktree');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('linktree_revisions');
        Schema::dropIfExists('linktrees');
    }
};
