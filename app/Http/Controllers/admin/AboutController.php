<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BioRequest;
use App\Http\Requests\EducationRequest;
use App\Http\Requests\ExperienceRequest;
use App\Http\Requests\TechnologyRequest;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Technology;
use App\Services\BioService;
use App\Services\EduService;
use App\Services\ExpService;
use App\Services\TechService;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    protected $bioService, $eduService, $expService, $techService;

    public function __construct(BioService $bioService, EduService $eduService, ExpService $expService, TechService $techService)
    {
        $this->bioService = $bioService;
        $this->eduService = $eduService;
        $this->expService = $expService;
        $this->techService = $techService;
    }



    public function index()
    {
        $educations = Education::all();
        $experiences = Experience::all();
        $technology = Technology::all();
        return view('backend.component.about', compact('educations', 'experiences', 'technology'));
    }

   


    public function biographyUpdate(BioRequest $request){

        $this->bioService->saveBio($request->validated());
        return redirect()->back();

    }

    public function educationUpdate(EducationRequest $request){



        $this->eduService->saveEdu($request->validated());
        return redirect()->back();

    }

    public function experienceUpdate(ExperienceRequest $request){
        $this->expService->saveExp($request->validated());
        return redirect()->back();

    }

    public function technologyUpdate(TechnologyRequest $request){
        $this->techService->saveTech($request->validated());
        return redirect()->back();

    }









}
