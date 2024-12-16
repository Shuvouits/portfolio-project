<?php


namespace App\Repositories;

use App\Models\Biography;
use App\Models\Intro;

class BioRepository
{

    public function findBio()
    {
        return Biography::first();
    }

    public function createOrUpdateBio($data)
    {
        
        $bio = $this->findBio();

        if (!$bio) {
            $bio = new Biography();
        }

        // Manually assign other fields from $data
        $bio->description = $data['description'] ?? $bio->description;

        // Save the intro
        $bio->save();

        return $bio;
    }
}
