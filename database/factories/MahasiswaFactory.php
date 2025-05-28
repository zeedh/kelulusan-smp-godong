<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'id-kegiatan' => Str::random(10),
            'nim' => $this->faker->unique()->creditCardNumber(),
            'prodi' => $this->faker->word(10),
            'mitra' => $this->faker->company(),
            'posisi' => $this->faker->word(10),
            'status' => $this->faker->word(),
            'email' => $this->faker->unique()->safeEmail(),
            'no_telp' => $this->faker->unique()->phoneNumber()
        ];
    }
}
