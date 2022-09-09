<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Enclosure;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create(['name'=>'Test','email'=>'test@test.com']);
        User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            EnclosuresTableSeeder::class,
            AnimalsTableSeeder::class,
            EmergencyContactsTableSeeder::class,
            KeepersTableSeeder::class,
            ]
        );
    }
}
