<?php

namespace App\Services;
use App\Repositories\EduRepository;

class EduService
{


    protected $eduRepository;

    public function __construct(EduRepository $eduRepository)
    {
        $this->eduRepository = $eduRepository;
    }


    public function saveEdu(array $data)
    {
        
        return $this->eduRepository->createOrUpdateBio($data);

    }


}
