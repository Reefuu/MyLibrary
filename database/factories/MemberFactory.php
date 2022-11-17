<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        return [
            'photo'=>'hoshi.jpg',
            'name'=>$this->faker->name($gender),
            'email'=>$this->faker->email,
            'age'=>rand(18, 100),
            'password'=>$this->faker->password,
            'gender'=>$gender,
            'joindate'=>$this->faker->date(),
            'description'=>$this->faker->paragraph(2),
            'phone'=>$this->faker->phoneNumber,
            'address'=>$this->faker->address,
            'city'=>$this->faker->city,
            'state'=>$this->faker->state,
            'country'=>$this->faker->country,
            'postcode'=>$this->faker->postcode,
        ];
    }
}
