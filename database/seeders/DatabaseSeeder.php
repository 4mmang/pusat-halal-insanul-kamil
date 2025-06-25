<?php

namespace Database\Seeders;

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
        // User::factory(10)->create();

        // User::create([
        //     'name' => 'arman',
        //     'email' => 'arman@example.com',
        //     'password' => Hash::make('1234')
        // ]);

        User::create([
            'name' => 'dianfitrisari3395',
            'email' => 'dianfitrisari3395@gmail.com',
            'password' => Hash::make('@Dfs3395'),
            'avatar' => '1.png'
        ]);

        User::create([
            'name' => 'Harfiani1992',
            'email' => 'Harfiani1992@gmail.com',
            'password' => Hash::make('insankamil25'),
            'avatar' => '2.png'

        ]);

        User::create([
            'name' => 'anandamagfira22',
            'email' => 'anandamagfira22@gmail.com',
            'password' => Hash::make('insankamil25'),
            'avatar' => '5.png'

        ]);

        User::create([
            'name' => 'haeranaabdulllah',
            'email' => 'haeranaabdulllah@gmail.com',
            'password' => Hash::make('Insankamil84'),
            'avatar' => '4.png'

        ]);

        User::create([
            'name' => 'naharuddinalie',
            'email' => 'naharuddinalie@gmail.com',
            'password' => Hash::make('aksinyata16'),
            'avatar' => '3.png'
        ]);
    }
}
