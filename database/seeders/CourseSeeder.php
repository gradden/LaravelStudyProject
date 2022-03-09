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
        $courses = [
            [
                'title' => 'course1',
                'description' => 'course1 desc',
                'author' => 'me',
                'url' => 'www.course1.com'
            ],
            [
                'title' => 'course2',
                'description' => 'course2 desc',
                'author' => 'me2',
                'url' => 'www.course2.com'
            ],
        ];

        foreach($courses as $c){
            Course::create($c);
        }

    }
}
