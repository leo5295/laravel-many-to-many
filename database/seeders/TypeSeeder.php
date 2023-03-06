<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['laravel', 'php', 'vue', 'js', 'vite + laravel', 'vite + vue'];

        foreach ($types as $item) {
            $newType = new Type();
            $newType->name = $item;
            $newType->slug = Str::slug($newType->name, '-');
            $newType->save();
        }
    }
}
