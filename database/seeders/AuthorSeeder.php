<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        $name = [
            'Tiara Intan Kusuma', #Spesialis interactive
            'Fransiska Xaveria' #Spesialis SE 
        ];

        $specialist = [
            'Spesialis Interactive Multimedia',
            'Spesialis Software Engineering'
        ];

        for ($i=0 ; $i<2 ; $i++){
            Author::create([
                'name' => $name[$i],
                'specialist' => $specialist[$i],
                'picture' => "author" . ($i+1) . ".jpg"
            ]);
        }

    }
}


