<?php

namespace Database\Seeders;

use App\Models\County;
use Illuminate\Database\Seeder;

class CountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = database_path('seeders/counties.json');

        if(!file_exists($file)) {
            return null;
        }

        foreach(json_decode(file_get_contents($file)) as $data) {
            County::updateOrCreate([
                'id' => $data->id,
            ], [
                'name' => $data->name
            ]);
        }
    }
}
