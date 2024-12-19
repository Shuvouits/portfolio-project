<?php

namespace App\Services;
use App\Repositories\InfoServiceRepository;

class InfoService
{


    protected $infoServiceRepository;

    public function __construct(InfoServiceRepository $infoServiceRepository)
    {
        $this->infoServiceRepository = $infoServiceRepository;
    }


    public function saveInfoService(array $data, $photo = null)
    {
        
        return $this->infoServiceRepository->createOrUpdateInfoService($data, $photo);

    }


}
