<?php

namespace App\Repositories;

use App\Models\Technology;

class TechRepository
{
    public function createOrUpdateTech($data)
    {



        // Delete all previous experience records
        Technology::truncate();

         // Check if 'technology' key exists and is not empty
         if (empty($data['technology']) || !is_array($data['technology'])) {
            // Return early if no degrees are provided
            return [];
        }


         // Array to store all created records
         $createdRecords = [];

         // Loop through the data and create new records
        foreach ($data['technology'] as $index => $technology) {


            // Create a new education record
            $tech = Technology::create([
                'technology' => $technology,
            ]);

            // Add the created record to the array
            $createdRecords[] = $tech;
        }

        // Return all created records
        return $createdRecords;




    }
}
