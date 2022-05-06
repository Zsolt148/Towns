<?php

namespace Database\Seeders;

use App\Models\Town;
use Illuminate\Database\Seeder;

class TownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = database_path('seeders/towns.json');

        if(!file_exists($file)) {
            return null;
        }

        foreach(json_decode(file_get_contents($file)) as $data) {
            Town::updateOrCreate([
                'id' => $data->id,
            ], [
                'name' => $data->name,
                'county_id' => $data->county_id,
                'county_seat' => $data->county_seat,
                'county_level' => $data->county_level,
            ]);
        }
    }
}
