<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('Roles')->insert([
        [
            'roles_name' => 'Super Admin',
            'roles_code' => "SADM",
        ],
        [
            'roles_name' => 'Moderator',
            'roles_code' => "MOD",
        ],
        [
            'roles_name' => 'Editor',
            'roles_code' => "EDT",
        ],
        [
            'roles_name' => 'Viewer',
            'roles_code' => "VWR",
        ],
    ]);
    }
}
?>
