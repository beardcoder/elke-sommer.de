<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\LinktreeRepository;
use App\Models\Linktree;

class LinktreeSeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (Linktree::count() > 0) {
            return;
        }

        app(LinktreeRepository::class)->create([
            'title' => 'Linktree',
            'description' => '',
            'published' => false,
        ]);
    }
}
