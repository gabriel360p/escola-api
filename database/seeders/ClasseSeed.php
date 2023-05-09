<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Classe;

class ClasseSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classe::create([
            'name' => "classe 1",
        ]);

        Classe::create([
            'name' => "classe 2",
        ]);
    }
}
