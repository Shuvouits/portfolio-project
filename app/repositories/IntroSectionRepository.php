<?php


namespace App\Repositories;

use App\Models\Service;

class IntroSectionRepository
{


    public function findService()
    {
        return Service::first();
    }

    public function createOrUpdateService($data)
    {
        $service = $this->findService();

        if (!$service) {
            $service = new Service();
        }



        // Manually assign other fields from $data
        $service->intro = $data['intro'] ?? $service->title;

        // Save the intro
        $service->save();

        return $service;
    }
}
