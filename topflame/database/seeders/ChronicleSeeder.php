<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChronicleSeeder extends Seeder
{
    public function run(): void
    {
        $chronicles = [
            ['name' => 'Interlude', 'slug' => 'interlude', 'sort_order' => 10, 'is_active' => true],
            ['name' => 'High Five', 'slug' => 'high-five', 'sort_order' => 20, 'is_active' => true],
            ['name' => 'Classic', 'slug' => 'classic', 'sort_order' => 30, 'is_active' => true],
            ['name' => 'Essence', 'slug' => 'essence', 'sort_order' => 40, 'is_active' => true],
            ['name' => 'Fafurion', 'slug' => 'fafurion', 'sort_order' => 50, 'is_active' => true],
        ];

        foreach ($chronicles as $chronicle) {
            DB::table('chronicles')->updateOrInsert(
                ['slug' => $chronicle['slug']],
                $chronicle
            );
        }
    }
}
