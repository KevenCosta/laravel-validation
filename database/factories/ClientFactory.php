<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AppModelsClient>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name(),
            'document_number'=>$this->faker->phoneNumber(),
            'email'=> $this->faker->unique()->safeEmail(),
            'phone'=>$this->faker->phoneNumber(),
            'defaulter'=>$this->faker->boolean(),
            'date_birth'=>$this->faker->date(),
            'sex'=>rand(1,2) % 2 == 0 ? 'M': 'F',
            'marital_status'=>rand(1,3),
            'physical_disability'=>rand(1,2) % 2 == 0 ? $this->faker->sentence(1):null
        ];
    }
}
