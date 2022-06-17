<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::create([
            'name' => 'admin',
            'email' => 'admin2@admin.com',
            'phone' => '01173452234',
            'password' => bcrypt('123456'),
        ]);
        $admin->assignRole('admin');

    }
}
