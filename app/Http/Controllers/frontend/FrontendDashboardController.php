<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Biography;
use App\Models\Core;
use App\Models\CoreInfo;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Intro;
use App\Models\Portfolio;
use App\Models\PortfolioBio;
use App\Models\Service;
use App\Models\ServiceInfo;
use App\Models\Technology;
use Illuminate\Http\Request;

class FrontendDashboardController extends Controller
{
    public function index(){
        $intro_section = Intro::first();
        $bio = Biography::first();
        $educations = Education::all();
        $experiences = Experience::all();
        $portfolios = Portfolio::all();

        $service_info = ServiceInfo::all();

        $portfolio_bio = PortfolioBio::first();

        $service = Service::first();

        $core_infos = CoreInfo::all();
        $cors = Core::first();
        $technology = Technology::all();
        return view('frontend.index', compact('intro_section', 'portfolio_bio', 'service', 'bio', 'educations', 'service_info', 'portfolios', 'core_infos', 'experiences', 'technology', 'cors'));
    }
}
