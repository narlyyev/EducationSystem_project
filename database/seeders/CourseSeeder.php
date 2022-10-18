<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objs = [
            [
                'name' => 'Beginner',
                'price' => 1200,
            ],
            [
                'name' => 'Elementary',
                'price' => 1200,
            ],
            [
                'name' => 'Pre Intermediate',
                'price' => 1200,
            ],
            [
                'name' => 'Intermediate',
                'price' => 1200,
            ],
            [
                'name' => 'Upper Intermediate',
                'price' => 1200,
            ],
            [
                'name' => 'Advanced',
                'price' => 800,
            ],
            [
                'name' => 'Niveaustufe A1',
                'price' => 800,
            ],
            [
                'name' => 'Niveaustufe A2',
                'price' => 800,
            ],
            [
                'name' => 'Niveaustufe B1',
                'price' => 800,
            ],
            [
                'name' => 'Niveaustufe B2',
                'price' => 800,
            ],
            [
                'name' => 'Niveaustufe C1',
                'price' => 800,
            ],
            [
                'name' => 'Niveaustufe C2',
                'price' => 800,
            ],
            [
                'name' => 'Başlangyç kompýuter sowatlylygy',
                'price' => 1500,
            ],
            [
                'name' => 'Arhitektur çyzuw',
                'price' => 1500,
            ],
            [
                'name' => 'Grafika 3D',
                'price' => 1500,
            ],
            [
                'name' => 'Programmirlemäniň esaslary',
                'price' => 1950,
            ],
            [
                'name' => 'Web programmirleme',
                'price' => 1950,
            ],
        ];
        foreach ($objs as $obj) {
            Course::create([
                'name' => $obj['name'],
                'price' => $obj['price'],
            ]);
        }
    }
}
