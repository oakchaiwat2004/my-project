<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $password = bcrypt('123456789');
        // DB::table('users')->insert([
        //     'name' => "chaiwat.tingda",
        //     'nick_name' => "Oak",
        //     'email' => "chaiwat.tingda2004@gmail.com",
        //     'password' => $password,
        //     'roles_id' => 1
        // ]);
        // DB::table('users')->insert([
        //     'name' => "John Doe",
        //     'nick_name' => "John",
        //     'email' => "johndoe@example.com",
        //     'password' => $password,
        //     'roles_id' => 2
        // ]);
        // DB::table('users')->insert([
        //     'name' => "user 1",
        //     'nick_name' => "U1",
        //     'email' => "user1@example.com",
        //     'password' => $password,
        //     'roles_id' => 3
        // ]);
        // DB::table('users')->insert([
        //     'name' => "user 2",
        //     'nick_name' => "U2",
        //     'email' => "user2@example.com",
        //     'password' => $password,
        //     'roles_id' => 3
        // ]);
        // DB::table('users')->insert([
        //     'name' => "user 3",
        //     'nick_name' => "U3",
        //     'email' => "user3@example.com",
        //     'password' => $password,
        //     'roles_id' => 3
        // ]);
        // DB::table('users')->insert([
        //     'name' => "user 4",
        //     'nick_name' => "U4",
        //     'email' => "user4@example.com",
        //     'password' => $password,
        //     'roles_id' => 3
        // ]);
        // DB::table('users')->insert([
        //     'name' => "user 5",
        //     'nick_name' => "U5",
        //     'email' => "user5@example.com",
        //     'password' => $password,
        //     'roles_id' => 3
        // ]);
        // DB::table('users')->insert([
        //     'name' => "user 6",
        //     'nick_name' => "U6",
        //     'email' => "user6@example.com",
        //     'password' => $password,
        //     'roles_id' => 3
        // ]);
        $faker = Faker::create();
        $password = bcrypt('123456789');
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        foreach (range(1, 100) as $index) {
            $roles = rand(1, 4);
            DB::table('users')->insert([
                'name' => $faker->userName,
                'email' => $faker->email,
                'password' => $password,
                'roles_id' => $roles,
                'nick_name' => "ooo"
            ]);

        }
    }
}
