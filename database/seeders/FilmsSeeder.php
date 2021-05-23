<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class FilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 30; $i++){
			DB::table('films')->insert([
				'cimena_id' => $i,
				'title' => 'Name films №'.$i,
				'description' => 'description OPISANIE )))0 №'.$i,
				'text' => '<p>rgjew]poporjqw]peogjqew]pogjqew]pogjew]pogjqew]pogjqw]epogjqew]pogj]pqewogj]qewpogjqew]pogjqw]peogj]pqewogjqew]pogjqew]pogjqew]</p>',
				'slug' => 'cinema-'.$i,
				'srcimage' => 'chrooror',
			]);
		}
        //
    }
}
