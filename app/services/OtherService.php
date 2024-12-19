<?php

namespace App\Services;
use App\Repositories\IntroRepository;
use App\Repositories\OtherRepository;

class OtherService
{


    protected $otherRepository;

    public function __construct(OtherRepository $otherRepository)
    {
        $this->otherRepository = $otherRepository;
    }


    public function saveOther(array $data, $photo = null)
    {
        return $this->otherRepository->createOrUpdateOther($data, $photo);

    }


}
