<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
           ClassroomSeeder::class,
           CourseSeeder::class,
        ]);

        Teacher::factory(100)->create();
        Student::factory(100)->create();
    }
}
