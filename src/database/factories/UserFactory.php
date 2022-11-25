<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $inputArray = [
            'Fyzika','Fyzika materialov','Fyzika učiteľstvo',
            'Matematika učiteľstvo', 'Informačné metódy v ekonómii a finančníctve',
            'Informatika učiteľstvo','Informatika aplikovaná',
            'Geografia v regionálnom rozvoji', 'Geografia učiteľstvo',
            'Chemia učiteľstvo',
            'Biologia', 'Biologia učiteľstvo'];

        $inputArray2 = [
            'Katedra fyziky',
            'Katedra matematiky',
            'Katedra informatiky',
            'Katedra geografie',
            'Katedra chémie',
            'Katedra botaniky a genetiky'];


        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi',
            'remember_token' => Str::random(10),
            'tel_cislo' => $this->faker->numberBetween($int1=909000000,$int2=999000000),
            'datum_narodenia' => $this->faker->date($format = 'Y-m-d', $max = '2004-12-25'),
            'pohlavie' => $this->faker->numberBetween($min=0,$max=1),
            'katedra' => $this->faker->randomElement($inputArray2),
            'odbor' => $this->faker->randomElement($inputArray),
            'Ulica' => $this->faker->streetName(),
            'Mesto' => $this->faker->city(),
            'PSC' => $this->faker->numberBetween($int1=90000,$int2=99000),
            'Admin' => $this->faker->numberBetween($min=0,$max=0),
            'Veduci_pracoviska' => $this->faker->numberBetween($min=0,$max=0),
            'Povereny_pracovnik' => $this->faker->numberBetween($min=0,$max=0),
            'Zastupca_firmy' => $this->faker->numberBetween($min=0,$max=0),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
