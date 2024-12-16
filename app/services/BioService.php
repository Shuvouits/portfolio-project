<?php

namespace App\Services;
use App\Repositories\BioRepository;

class BioService
{


    protected $bioRepository;

    public function __construct(BioRepository $bioRepository)
    {
        $this->bioRepository = $bioRepository;
    }


    public function saveBio(array $data)
    {
        return $this->bioRepository->createOrUpdateBio($data);

    }


}
