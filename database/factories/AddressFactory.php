<?php

namespace Finller\Address\Database\Factories;

use Finller\Address\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    protected $model = Address::class;

    /**
     * Define the model's default state.
     */
    public function definition()
    {
        return [
            'label' => fake()->city(),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'organization' => fake()->company(),
            'country' => fake()->countryCode(),
            'street' => fake()->streetAddress(),
            'state' => 'state',
            'city' => fake()->city(),
            'postal_code' => fake()->postcode(),
            'latitude' => fake()->latitude(),
            'longitude' => fake()->longitude(),
            'boundaries' => [fake()->longitude(), fake()->latitude(), fake()->longitude(), fake()->latitude()],
            'is_primary' => fake()->boolean(),
            'is_billing' => fake()->boolean(),
            'is_shipping' => fake()->boolean(),
            'type' => fake()->word(),
        ];
    }
}
