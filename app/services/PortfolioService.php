<?php

namespace App\Services;
use App\Repositories\PortfolioServiceRepository;

class PortfolioService
{


    protected $portfolioServiceRepository;

    public function __construct(PortfolioServiceRepository $portfolioServiceRepository)
    {
        $this->portfolioServiceRepository = $portfolioServiceRepository;
    }


    public function savePortfolio(array $data, $photo = null)
    {
    
        return $this->portfolioServiceRepository->createOrUpdatePortfolioService($data, $photo);

    }


}
