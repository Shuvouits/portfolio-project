<?php


namespace App\Repositories;
use App\Models\PortfolioBio;

class PortfolioIntroRepository
{


    public function findPortfolioIntro()
    {
        return PortfolioBio::first();
    }

    public function createOrUpdatePortfolioIntro($data)
    {
        $portfolio_intro = $this->findPortfolioIntro();

        if (!$portfolio_intro) {
            $portfolio_intro = new PortfolioBio();
        }


        // Manually assign other fields from $data
        $portfolio_intro->intro = $data['intro'] ?? $portfolio_intro->intro;


        // Save the intro
        $portfolio_intro->save();

        return $portfolio_intro;
    }
}
