<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_1 = User::create([
            'name' => 'user_1',
            'phone' => '01173452233',
            'password' => bcrypt('123456'),
        ]);
        $user_1->assignRole('user');

        $user_2 = User::create([
            'name' => 'user_2',
            'phone' => '01173152233',
            'password' => bcrypt('123456'),
        ]);
        $user_2->assignRole('user');

        $user_3 = User::create([
            'name' => 'user_3',
            'phone' => '01173442233',
            'password' => bcrypt('123456'),
        ]);
        $user_3->assignRole('user');

        $user_4 = User::create([
            'name' => 'user_4',
            'phone' => '01173452231',
            'password' => bcrypt('123456'),
        ]);
        $user_4->assignRole('user');

    }
}
