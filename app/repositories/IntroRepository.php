<?php


namespace App\Repositories;

use App\Models\Intro;
use App\Traits\FileUploadTrait; // Import the FileUploadTrait

class IntroRepository
{
    use FileUploadTrait; // Use the FileUploadTrait

    public function findIntro()
    {
        return Intro::first();
    }

    public function createOrUpdateIntro($data, $photo, $resume)
    {
        $intro = $this->findIntro();

        if (!$intro) {
            $intro = new Intro();
        }

        // Handle file uploads manually
        if ($photo) {
            $intro->photo = $this->uploadFile($photo, 'photo', $intro->photo);
        }

        if ($resume) {
            $intro->resume = $this->uploadFile($resume, 'resume', $intro->resume);
        }

        // Manually assign other fields from $data
        $intro->title = $data['title'] ?? $intro->title;
        $intro->short_description = $data['short_description'] ?? $intro->short_description;
        $intro->experience = $data['experience'] ?? $intro->experience;
        $intro->complete_project = $data['complete_project'] ?? $intro->complete_project;

        // Save the intro
        $intro->save();

        return $intro;
    }
}
