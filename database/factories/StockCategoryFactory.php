<?php

namespace Database\Factories;

use App\Models\StockCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class StockCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StockCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [

            'id' => $this->faker->unique(true)->numberBetween(1, 65000),
            'description' => $this->faker->company,
            'type' => $this->faker->randomElement(['F', 'R', 'D']),
            'stock_account' => "ACCT-" . $this->faker->domainWord,
        ];
    }
}
