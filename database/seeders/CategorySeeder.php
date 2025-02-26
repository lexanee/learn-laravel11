<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development'
        ]);

        Category::create([
            'name' => 'Mobile Development',
            'slug' => 'mobile-development'
        ]);

        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning'
        ]);

        Category::create([
            'name' => 'Data Science',
            'slug' => 'data-science'
        ]);

        Category::create([
            'name' => 'DevOps',
            'slug' => 'devops'
        ]);

        Category::create([
            'name' => 'Cloud Computing',
            'slug' => 'cloud-computing'
        ]);

        Category::create([
            'name' => 'Cyber Security',
            'slug' => 'cyber-security'
        ]);

        Category::create([
            'name' => 'Internet of Things',
            'slug' => 'internet-of-things'
        ]);

        Category::create([
            'name' => 'Database',
            'slug' => 'database'
        ]);

        Category::create([
            'name' => 'UI/UX',
            'slug' => 'ui-ux'
        ]);
    }
}
