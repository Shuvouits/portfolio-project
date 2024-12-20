<?php


namespace App\Repositories;

use App\Models\User;
use App\Traits\FileUploadTrait; // Import the FileUploadTrait

class ProfileRepository
{
    use FileUploadTrait; // Use the FileUploadTrait

    public function findProfile()
    {
        return User::first();
    }

    public function createOrUpdateProfile($data, $photo)
    {
        $profile = $this->findProfile();

        if (!$profile) {
            $profile = new User();
        }

        // Handle file uploads manually
        if ($photo) {
            $profile->image = $this->uploadFile($photo, 'user', $profile->image);
        }

        // Manually assign other fields from $data
        $profile->name = $data['name'] ?? $profile->name;
        $profile->email = $data['email'] ?? $profile->email;

        // Save the intro
        $profile->save();

        return $profile;
    }
}
