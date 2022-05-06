<?php

namespace Database\Seeders;

use App\Models\Population;
use Illuminate\Database\Seeder;

class PopulationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = database_path('seeders/pop.json');

        if(!file_exists($file)) {
            return null;
        }

        foreach(json_decode(file_get_contents($file)) as $data) {
            Population::updateOrCreate([
                'town_id' => $data->town_id,
                'year' => $data->year,
                'women' => $data->women,
                'total' => $data->total,
            ]);
        }
    }
}
