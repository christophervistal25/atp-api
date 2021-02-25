<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Establishment;

class EstablishmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Establishment', 10)->create();
    }
}
