<?php

namespace Database\Seeders;

use App\Models\Tecnology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TecnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tecnologies = ['HTML', 'CSS', 'JS', 'VUE', 'PHP', 'LARAVEL'];
        foreach ($tecnologies as $tecnology) {

            $new_tecnology = new Tecnology();
            $new_tecnology->title = $tecnology;
            $new_tecnology->description = $tecnology;

            $new_tecnology->save();

        }
    }
}
