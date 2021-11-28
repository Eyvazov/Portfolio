<?php

namespace Database\Factories;

use App\Models\Settings;
use Illuminate\Database\Eloquent\Factories\Factory;

class SettingsFactory extends Factory
{
    protected $model = Settings::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'logo' => 'https://azadeyvazov.com/img/291601ci%20png%20(1).png',
            'icon' => 'https://azadeyvazov.com/img/icon/295781ci%20png%20(1)%20(1).png',
        ];
    }
}
