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
        $filePath = public_path('storage/renovation1.xlsx'); // Path to the Excel file

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
            // Try to parse dates, or leave them null if parsing fails
            $startDate = $this->parseDate($row[5] ?? null);
            $endDate = $this->parseDate($row[6] ?? null);

            Project::create([
                'unique_number' => $row[0] ?? null,
                'district' => $row[2] ?? null,
                'mahalla' => $row[3] ?? null,
                'territory' => isset($row[4]) ? floatval($row[4]) : null,
                'start_date' => $startDate,
                'end_date' => $endDate,
                'participants' => $row[7] ?? null,
                'contacts' => $row[8] ?? null,
                'bankruptcy_check' => $row[9] ?? null,
                'protocol_created' => $row[10] === '+' ? true : false,
                'protocol_signed' => $row[11] === '+' ? true : false,
                'status' => $row[12] ?? null,
            ]);
        }

        $this->command->info("Projects table seeded successfully from Excel file!");
    }

    /**
     * Parse a date string into a valid Carbon date or return null.
     *
     * @param string|null $date
     * @return string|null
     */
    private function parseDate($date)
    {
        if (!$date) {
            return null;
        }

        $formats = ['d/m/Y', 'm/d/Y', 'Y-m-d']; // Common date formats
        foreach ($formats as $format) {
            try {
                return Carbon::createFromFormat($format, $date)->format('Y-m-d');
            } catch (\Exception $e) {
                // Continue to the next format
            }
        }

        // Return null if no format matches
        return null;
    }
}
