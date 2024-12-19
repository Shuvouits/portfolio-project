<?php


namespace App\Repositories;

use App\Models\ServiceInfo;
use App\Traits\FileUploadTrait; // Import the FileUploadTrait
use Illuminate\Support\Facades\File;

class InfoServiceRepository
{
    use FileUploadTrait; // Use the FileUploadTrait


    public function createOrUpdateInfoService($data, $photo)
    {


        $all_service = ServiceInfo::all();

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

        $this->updateImage($all_service);

        // Call the deleteUnusedImages function
        $this->deleteUnusedImages();

        // Return all created records
        return $createdRecords;
    }


    public function updateImage($all_service){



        foreach ($all_service as $item) {
            $service_data = ServiceInfo::where('id', $item['id'])->first();

            // চেক করুন `$service_data` null কিনা
            if ($service_data && empty($service_data->icon)) {
                $service_data->icon = $item->icon;
                $service_data->save();
            }
        }

    }

    public function deleteUnusedImages()
    {
        // ১. Public ফোল্ডারে থাকা সব ফাইল নিন
        $folderPath = public_path('upload/serviceInfo');
        $allFiles = File::files($folderPath);

        // ২. ডাটাবেসে থাকা সব ছবির ফাইল নাম বের করুন
        $databaseImages = ServiceInfo::pluck('icon')->map(function ($photo) {
            return basename(parse_url($photo, PHP_URL_PATH)); // Extract only the file name from the URL
        })->toArray();

        // ৩. প্রতিটি ফাইল লুপ করুন এবং ডাটাবেসে চেক করুন
        foreach ($allFiles as $file) {
            // Get the file name only (e.g., "30.png")
            $fileName = $file->getFilename();

            // Check if this file is NOT in the database
            if (!in_array($fileName, $databaseImages)) {
                // If not, delete the file
                unlink($file->getRealPath());
            }
        }
    }


}
