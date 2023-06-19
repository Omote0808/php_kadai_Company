<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CompanyBilling>
 */
class CompanyBillingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'company_id' => Company::factory()->create()->id,
            'name' => $this->faker->company(),
            'kana_name' => $this->faker->company(),
            'address' => $this->faker->address(),
            'tel' => $this->faker->phoneNumber(),
            'BillingDepartment' => $this->faker->name(),
            'kana_BillingDepartment' => $this->faker->kanaName(),
        ];
    }
}
