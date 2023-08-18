<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class channelTableSeeder extends Seeder
{
    public function run():void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('channel')->insert([
                'channelName' => $faker->company,
                'description' => $faker->sentence,
                'subscribersCount' => $faker->numberBetween(100, 10000),
                'url' => $faker->url,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
