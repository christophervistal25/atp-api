<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Message;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1, 10) as $iterate) {
            Message::create([
                'phone_number`' => '+639630711082',
                'message' => 'This is just a sample message for ID ' . $iterate,
            ]);`
        }
    }
}
