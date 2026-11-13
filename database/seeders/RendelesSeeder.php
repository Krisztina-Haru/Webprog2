<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rendeles;

class RendelesSeeder extends Seeder
{

    use WithoutModelEvents;

    public function run(): void
    {
        $path = database_path('seeders/rendeles.txt');
        
        if (file_exists($path)) {
            $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            
            foreach ($lines as $line) {
                $data = str_getcsv($line, ';');
                
                Rendeles::create([
                    'id' => (int) trim($data[0]),
                    'pizzanev' => trim($data[1]),
                    'darab' => (int) trim($data[2]),
                    'felvetel' => trim($data[3]),
                    'kiszallitas' => !empty($data[4]) ? trim($data[4]) : null,
                ]);
            }
        }
    }
}
