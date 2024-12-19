<?php

namespace App\Services;
use App\Repositories\CoreRepository;

class CoreService
{


    protected $coreRepository;

    public function __construct(CoreRepository $coreRepository)
    {
        $this->coreRepository = $coreRepository;
    }


    public function saveCore(array $data)
    {
        return $this->coreRepository->createOrUpdateCore($data);

    }


}
