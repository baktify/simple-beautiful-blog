<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'is_admin' => 1
        ])->create();
    }
}
