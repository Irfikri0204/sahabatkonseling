<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "Ir'Fikri Anggara Hasbar",
            'email' => 'fikrianggara72@gmail.com',
            'password' => bcrypt('11223344'),
        ],[
            'name' => "Admin",
            'email' => 'admin@example.com',
            'password' => bcrypt('11223344'),
        ]);
    }
}
