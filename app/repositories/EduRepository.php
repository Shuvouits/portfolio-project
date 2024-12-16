<?php

namespace App\Repositories;

use App\Models\Education;

class EduRepository
{
    public function createOrUpdateBio($data)
    {

        // Delete all previous education records
        Education::truncate();

         // Check if 'degrees' key exists and is not empty
         if (empty($data['degrees']) || !is_array($data['degrees'])) {
            // Return early if no degrees are provided
            return [];
        }


         // Array to store all created records
         $createdRecords = [];

         // Loop through the data and create new records
        foreach ($data['degrees'] as $index => $degree) {
            $institution = $data['institutions'][$index] ?? null;
            $date = $data['date'][$index] ?? null;

            // Create a new education record
            $edu = Education::create([
                'degree' => $degree,
                'institution' => $institution,
                'date' => $date,
            ]);

            // Add the created record to the array
            $createdRecords[] = $edu;
        }

        // Return all created records
        return $createdRecords;




    }
}
