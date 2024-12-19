<?php

namespace App\Services;
use App\Repositories\CoreInfoRepository;

class CoreInfoService
{


    protected $coreInfoRepository;

    public function __construct(CoreInfoRepository $coreInfoRepository)
    {
        $this->coreInfoRepository = $coreInfoRepository;
    }


    public function saveCore(array $data, $photo = null)
    {

        return $this->coreInfoRepository->createOrUpdateInfo($data, $photo);

    }


}
