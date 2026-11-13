<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategoria;

class KategoriaSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
       $path = database_path('seeders/kategoria.txt');
        
        if (file_exists($path)) {
            $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            
            foreach ($lines as $index => $line) {
                if ($index === 0) continue; 
                
                $data = str_getcsv($line, ';');
                
                Kategoria::create([
                    'nev' => trim($data[0]),
                    'ar' => (int) trim($data[1]),
                ]);
            }
        }
    }
}
