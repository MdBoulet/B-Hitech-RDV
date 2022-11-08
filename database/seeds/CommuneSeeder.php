<?php

use Illuminate\Database\Seeder;

class CommuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Commune::query()->insert([
            ['name' => 'Kaloum'],
            ['name' => 'Dixinn'],
            ['name' => 'Matam'],
            ['name' => 'Ratoma'],
            ['name' => 'Matoto'],
        ]);
    }
}
