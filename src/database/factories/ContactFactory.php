<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;


class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Contact::class;

    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'email'=>$this->faker->safeEmail(),
            'tel'=>$this->faker->phoneNumber(),
            'content'=>$this->faker->realText()
        ];
    }
}
