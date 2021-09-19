<?php

namespace Database\Factories;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShopFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shop::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'website' => $this->faker->url(),
            'phone' => $this->faker->phoneNumber(),
        ];
    }

    public function online()
    {
        return $this->state(function (array $attributes) {
            $onlineAttributes = $this->onlineAttributes();
            $onlineAttributes['type'] = Shop::TYPE_ONLINE;

            return $onlineAttributes;
        });
    }

    public function brickAndMortar()
    {
        return $this->state(function (array $attributes) {
            $brickAndMortalAttributes = $this->brickAndMortarAttributes();
            $brickAndMortalAttributes['type'] = Shop::TYPE_BRICK_N_MORTAR;

            return $brickAndMortalAttributes;
        });
    }

    public function hybrid()
    {
        return $this->state(function (array $attributes) {
            $hybridAttributes = array_merge($this->onlineAttributes(), $this->brickAndMortarAttributes());
            $hybridAttributes['type'] = Shop::TYPE_HYBRID;

            return $hybridAttributes;
        });
    }

    private function onlineAttributes()
    {
        return [
            'shippingCountries' => $this->faker->country()
        ];
    }

    private function brickAndMortarAttributes()
    {
        return [
            'street' => $this->faker->streetAddress(),
            'state' => $this->faker->stateAbbr(),
            'city' => $this->faker->city(),
            'postcode' => $this->faker->postcode(),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude()
        ];
    }
}
