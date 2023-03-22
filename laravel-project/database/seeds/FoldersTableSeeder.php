<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class FoldersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = ['Gust','山盛りポテトフライ','5'];

        DB::table('folders')->insert([
            'name' => $titles[0],
            'kind' => $titles[1],
            'rank' => $titles[2],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
