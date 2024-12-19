<?php


namespace App\Repositories;
use App\Models\Core;

class CoreRepository
{


    public function findCoreIntro()
    {
        return Core::first();
    }

    public function createOrUpdateCore($data)
    {
    
        $core_intro = $this->findCoreIntro();

        if (!$core_intro) {
            $core_intro = new Core();
        }


        // Manually assign other fields from $data
        $core_intro->intro = $data['intro'] ?? $core_intro->intro;


        // Save the intro
        $core_intro->save();

        return $core_intro;
    }
}
