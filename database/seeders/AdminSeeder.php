<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'username'   => 'admin',
            'firstname'  => 'Christopher',
            'middlename' => 'Platino',
            'lastname'   => 'Vistal',
            'phone_number' => '09193693499',
            'password'   => Hash::make('christopher'),
        ]);
    }
}
