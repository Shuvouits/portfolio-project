<?php

namespace App\Services;
use App\Repositories\IntroSectionRepository;

class IntroSectionService
{


    protected $introSectionRepository;

    public function __construct(IntroSectionRepository $introSectionRepository)
    {
        $this->introSectionRepository = $introSectionRepository;
    }


    public function saveIntro(array $data)
    {
        return $this->introSectionRepository->createOrUpdateService($data);
       

    }


}
