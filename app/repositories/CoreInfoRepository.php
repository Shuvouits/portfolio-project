<?php


namespace App\Repositories;

use App\Models\CoreInfo;
use App\Models\Portfolio;
use App\Traits\FileUploadTrait; // Import the FileUploadTrait
use Illuminate\Support\Facades\File;

class CoreInfoRepository
{
    use FileUploadTrait; // Use the FileUploadTrait



    public function createOrUpdateInfo($data, $photo)
    {

        $all_core = CoreInfo::all();

        // Delete all previous education records
        CoreInfo::truncate();


        // Check if 'degrees' key exists and is not empty
        if (empty($data['title']) || !is_array($data['title'])) {
            // Return early if no degrees are provided
            return [];
        }


        // Array to store all created records
        $createdRecords = [];

        // Loop through the data and create new records
        foreach ($data['title'] as $index => $core_title) {
            // $service_name = $data['service_name'][$index] ?? null;
            $core_description = $data['core_description'][$index] ?? null;

            // Handle the image upload for the current service
            $uploadedPhoto = isset($photo[$index]) ? $this->uploadFile($photo[$index], 'core') : null;



            // Create a new education record
            $coreInfo = CoreInfo::create([
                'title' => $core_title,
                'core_description' => $core_description,
                'image' => $uploadedPhoto, // Save the uploaded image URL
            ]);

            // Add the created record to the array
            $createdRecords[] = $coreInfo;
        }

        $this->updateImage($all_core);

        // Call the deleteUnusedImages function
        $this->deleteUnusedImages();

        // Return all created records
        return $createdRecords;
    }

    public function updateImage($all_core){



        foreach ($all_core as $item) {
            $core_data = CoreInfo::where('id', $item['id'])->first();

            // চেক করুন `$portfolio_data` null কিনা
            if ($core_data && empty($core_data->image)) {
                $core_data->image = $item->image;
                $core_data->save();
            }
        }

    }

    public function deleteUnusedImages()
    {
        // ১. Public ফোল্ডারে থাকা সব ফাইল নিন
        $folderPath = public_path('upload/core');
        $allFiles = File::files($folderPath);

        // ২. ডাটাবেসে থাকা সব ছবির ফাইল নাম বের করুন
        $databaseImages = CoreInfo::pluck('image')->map(function ($photo) {
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
