<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MahasiswaModel>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        //['nim', 'nama', 'jenis_kelamin', 'jurusan', 'alamat'];
        return [
            "nim" => fake()->numerify('10##-####'),
            "nama"  =>  fake()->name(),
            'jenis_kelamin' => fake()->randomElement(['L', 'P']),
            'jurusan' => fake()->randomElement(['Teknik Informatika', 'Sistem Informasi', 'Manajemen Informasi']),
            'alamat'    => fake()->address()
        ];
    }
}
