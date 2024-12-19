<?php


namespace App\Repositories;

use App\Models\GeneralSetting;
use App\Models\Intro;
use App\Traits\FileUploadTrait; // Import the FileUploadTrait

class OtherRepository
{
    use FileUploadTrait; // Use the FileUploadTrait

    public function findOther()
    {
        return GeneralSetting::first();
    }

    public function createOrUpdateOther($data, $photo)
    {
        $other = $this->findOther();

        if (!$other) {
            $other = new GeneralSetting();
        }

        // Handle file uploads manually
        if ($photo) {
            $other->logo = $this->uploadFile($photo, 'other', $other->logo);
        }

        // Manually assign other fields from $data
        $other->address = $data['address'] ?? $other->address;
        $other->email = $data['email'] ?? $other->email;
        $other->phone = $data['phone'] ?? $other->phone;
        $other->facebook = $data['facebook'] ?? $other->facebook;
        $other->twitter = $data['twitter'] ?? $other->twitter;
        $other->instagram = $data['instagram'] ?? $other->instagram;
        $other->linkedin = $data['linkedin'] ?? $other->linkedin;
        $other->pinterest = $data['pinterest'] ?? $other->pinterest;
        $other->copyright = $data['copyright'] ?? $other->copyright;
        $other->meta_title = $data['meta_title'] ?? $other->meta_title;
        $other->meta_description = $data['meta_description'] ?? $other->meta_description;


        // Save the intro
        $other->save();

        return $other;
    }
}
