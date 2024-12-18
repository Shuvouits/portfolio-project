<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioIntroRequest;
use App\Http\Requests\PortfolioRequest;
use App\Models\Portfolio;
use App\Models\PortfolioBio;
use App\Services\PortfolioIntroService;
use App\Services\PortfolioService;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    protected $portfolioIntroService, $portfolioService;

    public function __construct(PortfolioIntroService $portfolioIntroService, PortfolioService $portfolioService)
    {
        $this->portfolioIntroService = $portfolioIntroService;
        $this->portfolioService = $portfolioService;

    }




    public function index()
    {
        $portfolio_intro = PortfolioBio::first();
        $portfolios = Portfolio::all();
        return view('backend.component.portfolio', compact('portfolios', 'portfolio_intro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(PortfolioRequest $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PortfolioIntroRequest $request)
    {
        $this->portfolioIntroService->savePortfolioIntro($request->validated());
        return redirect()->back()->with('success', 'Data updated successfully');
    }

    public function portfolioStore(PortfolioRequest $request){

        //dd($request->validated());

        $this->portfolioService->savePortfolio($request->validated(), $request->file('photo') );
        return redirect()->back()->with('success', 'Data updated successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
