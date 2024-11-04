<?php

namespace Database\Seeders;

use App\Models\Kadis;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(10)->create();

        // User::create([
        //     'name' => 'Test User',
        //     'username' => 'test',
        //     'password' => Hash::make('password'),
        //     // 'email' => 'test@example.com',
        // ]);

        Kadis::create([
            'nama' => 'Drs. M. HELFIANNOOR, M.Si',
            'pangkat' => 'Pembina Utama Muda',
            'NIP' => '19730719 199302 1 002'
        ]);
    }
}
