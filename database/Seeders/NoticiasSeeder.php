<?php

namespace Database\Seeders;

use App\Models\Noticia;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class NoticiasSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $imagePath = public_path('images');

        if (File::exists($imagePath)) {
            $images = File::allFiles($imagePath);

            foreach ($images as $image) {
                $noticia = new Noticia();
                $noticia->title = Str::words($faker->sentence(), 5);
                $noticia->content = $faker->paragraphs(10, true);
                $noticia->image = 'images/' . $image->getFilename();
                $noticia->save();
            }
        }
    }
}
