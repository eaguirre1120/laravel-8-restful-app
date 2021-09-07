<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client_name' => $this->faker->name(),
            'client_company_name' => $this->faker->company(),
            'client_phone' => $this->faker->phoneNumber(),
            'client_email' => $this->faker->companyEmail(),
            'client_address' => $this->faker->address(),
            'project_name' => $this->faker->jobTitle(),
        ];
    }
}
