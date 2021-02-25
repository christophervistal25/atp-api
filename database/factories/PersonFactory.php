<?php

use Illuminate\Support\Str;
use App\Models\Province;
use App\Models\Barangay;
use App\Models\City;
use App\Models\Person;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\Person::class, function (Faker $faker) {
    return [
        'firstname'         => $faker->firstname,
        'middlename'        => $faker->firstname,
        'lastname'          => $faker->lastName,
        'suffix'            => $faker->suffix,
        'province_code'     => Province::first()->code,
        'city_code'         => City::first()->code,
        'temporary_address' => $faker->address,
        'address'           => $faker->address,
        'barangay_code'     => Barangay::first()->code,
        'age'               => $faker->numberBetween(10, 70),
        'civil_status'      => 'Single',
        'phone_number'      => $faker->phoneNumber,
        'date_of_birth'     => Carbon::now(),
    ];
});
