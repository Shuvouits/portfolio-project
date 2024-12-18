<?php


namespace App\Repositories;

use App\Models\Portfolio;
use App\Traits\FileUploadTrait; // Import the FileUploadTrait
use Illuminate\Support\Facades\File;

class PortfolioServiceRepository
{
    use FileUploadTrait; // Use the FileUploadTrait



    public function createOrUpdatePortfolioService($data, $photo)
    {

        $all_portfolio = Portfolio::all();

        // Delete all previous education records
        Portfolio::truncate();


        // Check if 'degrees' key exists and is not empty
        if (empty($data['title']) || !is_array($data['title'])) {
            // Return early if no degrees are provided
            return [];
        }


        // Array to store all created records
        $createdRecords = [];

        // Loop through the data and create new records
        foreach ($data['title'] as $index => $portfolio_title) {
            // $service_name = $data['service_name'][$index] ?? null;
            $headline = $data['headline'][$index] ?? null;
            $description = $data['description'][$index] ?? null;
            $id = $data['id'][$index] ?? null;


            // Handle the image upload for the current service
            $uploadedPhoto = isset($photo[$index]) ? $this->uploadFile($photo[$index], 'portfolio') : null;




            // Create a new education record
            $portfolio = Portfolio::create([
                'title' => $portfolio_title,
                'headline' => $headline,
                'description' => $description,
                'photo' => $uploadedPhoto, // Save the uploaded image URL
            ]);

            // Add the created record to the array
            $createdRecords[] = $portfolio;
        }

        $this->updateImage($all_portfolio);

        // Call the deleteUnusedImages function
        $this->deleteUnusedImages();

        // Return all created records
        return $createdRecords;
    }

    public function updateImage($all_portfolio){



        foreach ($all_portfolio as $item) {
            $portfolio_data = Portfolio::where('id', $item['id'])->first();

            // চেক করুন `$portfolio_data` null কিনা
            if ($portfolio_data && empty($portfolio_data->photo)) {
                $portfolio_data->photo = $item->photo;
                $portfolio_data->save();
            }
        }

    }

    public function deleteUnusedImages()
    {
        // ১. Public ফোল্ডারে থাকা সব ফাইল নিন
        $folderPath = public_path('upload/portfolio');
        $allFiles = File::files($folderPath);

        // ২. ডাটাবেসে থাকা সব ছবির ফাইল নাম বের করুন
        $databaseImages = Portfolio::pluck('photo')->map(function ($photo) {
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
