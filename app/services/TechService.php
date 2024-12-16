<?php

namespace App\Services;
use App\Repositories\TechRepository;

class TechService
{


    protected $techRepository;

    public function __construct(TechRepository $techRepository)
    {
        $this->techRepository = $techRepository;
    }


    public function saveTech(array $data)
    {
       // dd($data);
        return $this->techRepository->createOrUpdateTech($data);

    }


}
