<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class ProjectsTableSeeder extends Seeder
{
    public function run()
    {
        $filePath = public_path('storage/Renovatsiya_posts.xlsx'); // Path to the Excel file

        // Load the Excel file
        $data = Excel::toArray([], $filePath);

        // Ensure the Excel file is loaded properly
        if (empty($data) || !isset($data[0])) {
            $this->command->error("Failed to load data from Excel file: $filePath");
            return;
        }

        $rows = $data[0]; // First sheet data

        // Skip the header row and process the rest
        foreach (array_slice($rows, 1) as $row) {
            // Parse date ranges for start and end dates
            $startDates = $this->parseDateRange($row[4] ?? null);
            $secondStageDates = $this->parseDateRange($row[5] ?? null);

            Project::create([
                'unique_number' => $row[0] ?? null,
                'district' => $row[1] ?? null,
                'mahalla' => $row[2] ?? null,
                'territory' => isset($row[3]) ? floatval($row[3]) : null,
                'implementation_period' => isset($row[4]) ? intval($row[4]) : null,
                'start_date' => $startDates['start_date'],
                'end_date' => $startDates['end_date'],
                'second_stage_start_date' => $secondStageDates['start_date'],
                'second_stage_end_date' => $secondStageDates['end_date'],
                'status' => $row[6] ?? null,
            ]);
        }

        $this->command->info("Projects table seeded successfully from Excel file!");
    }

    /**
     * Parse a date range (e.g., "06.12.2024 - 16.12.2024") into start and end dates.
     *
     * @param string|null $dateRange
     * @return array
     */
    private function parseDateRange($dateRange)
    {
        if (!$dateRange) {
            return ['start_date' => null, 'end_date' => null];
        }

        $dates = explode(' - ', $dateRange);

        try {
            $startDate = isset($dates[0]) ? Carbon::createFromFormat('d.m.Y', trim($dates[0]))->format('Y-m-d') : null;
            $endDate = isset($dates[1]) ? Carbon::createFromFormat('d.m.Y', trim($dates[1]))->format('Y-m-d') : null;
        } catch (\Exception $e) {
            $startDate = null;
            $endDate = null;
        }

        return [
            'start_date' => $startDate,
            'end_date' => $endDate,
        ];
    }
}
