<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([

            RoleSeeder::class,
            sportsSeeder::class,
            NationalitySeeder::class,
            AwardsSeeder::class,
            forcesSeeder::class,
            docsSeeder::class,
            GenderSeeder::class,
            categoriesSeeder::class,
            GradeSeeder::class,
            participantSeeder::class,
            CompetenceSeeder::class,
            ScoreSeeder::class,
        ]);

        \App\Models\User::factory()->create([
            'name' => 'test',
            'email' => 'test@test.com',
            'password' => bcrypt(12345678),
            'force_id' => 1,
        ])->assignRole('viewer');

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt(12345678),
            'force_id' => 1,
        ])->assignRole('admin');

        \App\Models\User::factory()->create([
            'name' => 'consumer',
            'email' => 'consumer@consumer.com',
            'password' => bcrypt(12345678),
            'force_id' => 1,
        ])->assignRole('consumer');

        \App\Models\User::factory(10)->create();

        Artisan::call('passport:install');
    }
}
