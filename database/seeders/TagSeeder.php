<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::factory(['name' => 'monday'])->create();
        Tag::factory(['name' => 'friday'])->create();
        Tag::factory(['name' => 'sunday'])->create();
        Tag::factory(['name' => 'hello'])->create();
        Tag::factory(['name' => 'nature'])->create();
        Tag::factory(['name' => 'animal'])->create();
    }
}
