<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
             'name' => 'akil',
             'email' => 'akiklii72@gmail.com',
             'password' => bcrypt('akil1221'), 
             'is_admin' => true,
        ]);
    }
}
