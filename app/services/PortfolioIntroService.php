<?php

namespace App\Services;

use App\Repositories\PortfolioIntroRepository;

class PortfolioIntroService
{


    protected $portfolioIntroRepository;

    public function __construct(PortfolioIntroRepository $portfolioIntroRepository)
    {
        $this->portfolioIntroRepository = $portfolioIntroRepository;
    }


    public function savePortfolioIntro(array $data)
    {
       // dd($data);
        return $this->portfolioIntroRepository->createOrUpdatePortfolioIntro($data);

    }


}
