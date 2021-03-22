<?php

namespace Database\Factories;

use App\Models\Stock;
use App\Models\Uom;
use App\Models\StockCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class StockFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Stock::class;

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
            'stock_category_id' => StockCategory::all('id')->random(),
            'uom' =>Uom::all('id')->random(),
            'barcode' => $this->faker->ean13,
            'discontinued' => $this->faker->randomElement(['Y','N']),
         

        ];
    }
}
