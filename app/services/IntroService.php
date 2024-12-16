<?php

namespace App\Services;
use App\Repositories\IntroRepository;

class IntroService
{


    protected $introRepository;

    public function __construct(IntroRepository $introRepository)
    {
        $this->introRepository = $introRepository;
    }


    public function saveIntro(array $data, $photo = null, $resume = null)
    {
        return $this->introRepository->createOrUpdateIntro($data, $photo, $resume);

    }


}
