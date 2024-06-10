<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('Members')->insert([
        [
            'm_name' => 'chaiwat',
            'm_lastname' => 'tingda',
            'status' => 'old',
        ],

        ]);
    }
}
