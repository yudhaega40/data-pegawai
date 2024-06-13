<?php

namespace Database\Factories;

use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PegawaiFactory extends Factory
{
    protected $model = Pegawai::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'no_pegawai'  => fake()->unique()->randomNumber($nbDigits = 9, $strict = false) ,
            'nama' => fake()->name(),
            'jenis_kelamin' => fake()->randomElement($array = array ('L','P')),
            'tanggal_lahir' => fake()->date(),
            'agama' => fake()->randomElement($array = array ('Islam','Katolik','Protestan','Hindu','Budha','Lain lain')),
            'status_kawin' => fake()->numberBetween(0, 1),
            'alamat' => fake()->address(),
            'no_hp' => fake()->e164PhoneNumber(),
            'mulai_kerja' => now(),
            'divisi' => fake()->randomElement($array = array ('IT','Sales','HRS')),
        ];
    }
}
