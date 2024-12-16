<?php

namespace App\Services;
use App\Repositories\ExpRepository;

class ExpService
{


    protected $expRepository;

    public function __construct(ExpRepository $expRepository)
    {
        $this->expRepository = $expRepository;
    }


    public function saveExp(array $data)
    {
       // dd($data);
        return $this->expRepository->createOrUpdateExp($data);

    }


}
