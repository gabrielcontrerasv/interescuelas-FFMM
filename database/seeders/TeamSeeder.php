<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            ['name'=>'esgrima EJC','force_id' => 1,'discipline_id'=>1,'sport_id' =>1],
            ['name'=>'futbol FAC','force_id' => 2,'discipline_id'=>2,'sport_id' =>1],
            ['name'=>'baloncesto ARC','force_id' => 3,'discipline_id'=>3,'sport_id' =>1],
        ]);
    }
}
