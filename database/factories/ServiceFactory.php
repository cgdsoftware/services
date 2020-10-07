<?php

namespace LaravelEnso\Services\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;
use LaravelEnso\MeasurementUnits\Models\MeasurementUnit;
use LaravelEnso\Services\Models\Service;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition()
    {
        return [
            'measurement_unit_id' => fn () => MeasurementUnit::firstOrCreate(['name' => 'Piece'])->id,
            'name' => $this->faker->name,
            'code' => $this->faker->unique()->ean8,
            'list_price' => $this->faker->numberBetween(1, 300),
            'vat_percent' => (new Collection([5, 19, 24]))->random(),
            'description' => $this->faker->text,
            'is_active' => true,
        ];
    }
}
