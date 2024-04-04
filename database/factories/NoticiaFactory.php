<?php

namespace Database\Factories;

use App\Models\Noticia;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;

class NoticiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Caminho para a pasta de imagens dentro de public
        $imagePath = public_path('images');

        // Verifica se existem arquivos de imagem na pasta
        $images = File::files($imagePath);

        // Se não houver imagens, retorna um array vazio
        if (empty($images)) {
            return [];
        }

        // Seleciona uma imagem aleatória da lista de arquivos
        $randomImage = $this->faker->randomElement($images);

        // Retorna os atributos para o modelo Noticia
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraphs(10, true),
            // O caminho da imagem é relativo ao diretório public
            // Portanto, não há necessidade de modificar o caminho
            'image' => 'images/' . $randomImage->getFilename()
        ];
    }
}
