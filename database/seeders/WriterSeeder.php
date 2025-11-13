<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Writer;

class WriterSeeder extends Seeder
{
    public function run(): void
    {
        Writer::create([
            'name' => 'Raka Putra Wicaksono',
            'specialty' => 'Interactive Multimedia' // SESUAI Figure 5
        ]);
        Writer::create([
            'name' => 'Bia Mecca Annisa',
            'specialty' => 'Data Science'
        ]);
        Writer::create([
            'name' => 'Abi Firmansyah',
            'specialty' => 'Network Security'
        ]);
    }
}