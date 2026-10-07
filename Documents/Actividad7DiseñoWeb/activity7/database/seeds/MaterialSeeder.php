<?php

use Illuminate\Database\Seeder;
use App\Material;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kits = [
            ['name' => 'StarterKit'],
            ['name' => 'Educational Robotics Kit'],
            ['name' => 'Kit5'],
        ];

        foreach ($kits as $kit) {
            Material::firstOrCreate(
                ['name' => $kit['name']],
                $kit
            );
        }
    }
}
