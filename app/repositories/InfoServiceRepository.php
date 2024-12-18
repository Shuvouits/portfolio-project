<?php


namespace App\Repositories;

use App\Models\ServiceInfo;
use App\Traits\FileUploadTrait; // Import the FileUploadTrait

class InfoServiceRepository
{
    use FileUploadTrait; // Use the FileUploadTrait


    public function createOrUpdateInfoService($data, $photo)
    {


        // Retrieve and delete all existing images
        $existingImages = ServiceInfo::pluck('icon')->toArray();
        foreach ($existingImages as $image) {
            if ($image && file_exists(public_path(parse_url($image, PHP_URL_PATH)))) {
                unlink(public_path(parse_url($image, PHP_URL_PATH)));
            }
        }


        // Delete all previous education records
        ServiceInfo::truncate();

        // Check if 'degrees' key exists and is not empty
        if (empty($data['service_name']) || !is_array($data['service_name'])) {
            // Return early if no degrees are provided
            return [];
        }


        // Array to store all created records
        $createdRecords = [];

        // Loop through the data and create new records
        foreach ($data['service_name'] as $index => $service_name) {
            // $service_name = $data['service_name'][$index] ?? null;
            $service_description = $data['service_description'][$index] ?? null;


            // Handle the image upload for the current service
            $uploadedPhoto = isset($photo[$index]) ? $this->uploadFile($photo[$index], 'serviceInfo') : null;

            // Create a new education record
            $service_info = ServiceInfo::create([
                'service_name' => $service_name,
                'service_description' => $service_description,
                'icon' => $uploadedPhoto, // Save the uploaded image URL
            ]);

            // Add the created record to the array
            $createdRecords[] = $service_info;
        }

        // Return all created records
        return $createdRecords;
    }
}
