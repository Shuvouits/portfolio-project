<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceInfoRequest;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use App\Models\ServiceInfo;
use App\Services\InfoService;
use App\Services\IntroSectionService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    protected $introSectionService;

    public function __construct(IntroSectionService $introSectionService, InfoService $infoService)
    {
        $this->introSectionService = $introSectionService;

    }

    public function index()
    {
        $services = Service::first();
        $service_info = ServiceInfo::all();
        return view('backend.component.service', compact('services', 'service_info'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceRequest $serviceRequest)
    {
        $this->introSectionService->saveIntro($serviceRequest->validated());
        return redirect()->back()->with('success', 'Data updated successfully');
    }



}
