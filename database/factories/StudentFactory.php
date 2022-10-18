<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $course = DB::table('courses')->inRandomOrder()->first();
        $teacher = DB::table('teachers')->inRandomOrder()->first();
        $classroom = DB::table('classrooms')->inRandomOrder()->first();
        return [
            'course_id' => $course->id,
            'teacher_id' => $teacher->id,
            'classroom_id' => $classroom->id,
            'first_name' => fake()->firstName,
            'last_name' => fake()->lastName,
            'phone' => rand(60000000, 65999999),
            'phone_2' => rand(60000000, 65999999),
            'birthday'=> fake()->date(),
            'gender' => fake()->boolean(40),
        ];
    }
}
