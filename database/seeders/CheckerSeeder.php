<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Checker;
use App\Models\City;
use Illuminate\Support\Facades\Hash;

class CheckerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Checker::create([
            'firstname'      => 'christopher',
            'middlename'     => 'platino',
            'lastname'       => 'vistal',
            'municipal_code' => City::first()->code,
            'phone_number'   => '09193693499',
            'username'       => 'tooshort01',
            'password'       => Hash::make('christopher')
        ]);
    }
}
