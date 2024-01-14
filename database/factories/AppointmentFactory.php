<?php

namespace Database\Factories;

use App\Models\barber;
use App\Models\service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         // Get an existing service ID
    $serviceId = Service::inRandomOrder()->value('id');
    $barberId = Barber::inRandomOrder()->value('id');



        return [
            'customer_name' => fake()->name(),
            'service_id' => $serviceId,
            'barber_id' => $barberId,
            'booking_schedule' =>fake()->dateTimeBetween('now', '+1 week'),
        ];
    }
}
