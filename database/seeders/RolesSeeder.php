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
            'name_thai' => 'ซูเปอร์แอดมิน',
        ],
        [
            'roles_name' => 'Moderator',
            'roles_code' => "MOD",
            'name_thai' => 'มอด',
        ],
        [
            'roles_name' => 'Editor',
            'roles_code' => "EDT",
            'name_thai' => 'ผู้สร้าง',
        ],
        [
            'roles_name' => 'Viewer',
            'roles_code' => "VWR",
            'name_thai' => 'ผู้ดูแล',
        ],
    ]);
    }
}
?>
