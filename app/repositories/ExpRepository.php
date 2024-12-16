<?php

namespace App\Repositories;

use App\Models\Education;
use App\Models\Experience;

class ExpRepository
{
    public function createOrUpdateExp($data)
    {



        // Delete all previous experience records
        Experience::truncate();

         // Check if 'company_name' key exists and is not empty
         if (empty($data['company_name']) || !is_array($data['company_name'])) {
           
            return [];
        }


         // Array to store all created records
         $createdRecords = [];

         // Loop through the data and create new records
        foreach ($data['company_name'] as $index => $company_name) {
            $address = $data['address'][$index] ?? null;
            $start_date = $data['start_date'][$index] ?? null;
            $end_date = $data['end_date'][$index] ?? null;

            // Create a new education record
            $exp = Experience::create([
                'company_name' => $company_name,
                'address' => $address,
                'start_date' => $start_date,
                'end_date' => $end_date,
            ]);

            // Add the created record to the array
            $createdRecords[] = $exp;
        }

        // Return all created records
        return $createdRecords;




    }
}
