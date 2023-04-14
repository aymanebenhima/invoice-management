<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(storage_path('app/json/cities.json'));
        $data = json_decode($json);

        foreach ($data as $item) {
            DB::table('cities')->insert([
                'id' => $item->id,
                'city' => $item->ville,
                'region_id' => $item->region,

            ]);
        }
    }
}
