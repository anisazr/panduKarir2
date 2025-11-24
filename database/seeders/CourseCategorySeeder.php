<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourseCategory;

class CourseCategorySeeder extends Seeder
{
    public function run()
    {
        CourseCategory::insert([
            [
                'name' => 'Programming',
                'desc' => 'Kursus tentang bahasa pemrograman.',
            ],
            [
                'name' => 'Design',
                'desc' => 'Kursus tentang desain grafis dan UI/UX.',
            ],
            [
                'name' => 'Marketing',
                'desc' => 'Kursus tentang pemasaran digital.',
            ],
            [
                'name' => 'Business',
                'desc' => 'Kursus tentang bisnis dan manajemen.',
            ],
        ]);
    }
}
