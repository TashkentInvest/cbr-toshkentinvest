<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'unique_number' => 'YUN0001',
                'category_id' => 1, // Adjust based on your categories
                'district' => 'Юнусабадский',
                'street' => 'Кашгар',
                'mahalla_name' => 'Кашгар',
                'land' => 0.12,
                'investor_initiative_date' => '2024-05-16',
                'company_name' => 'Dream Visualization',
                'contact_person' => 'Дильноза (77) 777-21-21',
                'hokim_resolution_no' => '520-14-0-Q/24 от 1 августа 2024',
                'status' => 'step_1',
            ],
            [
                'unique_number' => 'CHL0001',
                'category_id' => 1,
                'district' => 'Чиланзарский',
                'street' => 'Катта Козиробод',
                'mahalla_name' => 'Катта Козиробод',
                'land' => 3.77,
                'investor_initiative_date' => '2024-05-16',
                'company_name' => 'Nur Hayat Classics, Isaar Development',
                'contact_person' => 'Вохиб (93) 001-39-99, Раупжон (77)737-00-40, Сунат (90)957-30-30',
                'hokim_resolution_no' => '523-14-0-Q/24 от 1 августа 2024',
                'status' => 'step_1',
            ],
            // Add more projects as needed
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
