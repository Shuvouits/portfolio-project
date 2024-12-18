<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceInfoRequest;
use App\Services\InfoService;
use Illuminate\Http\Request;

class ServiceInfoController extends Controller
{
    protected $infoService;

    public function __construct(InfoService $infoService)
    {
        $this->infoService = $infoService;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceInfoRequest $request)
    {


        $this->infoService->saveInfoService($request->validated(), $request->file('icon'));
        return redirect()->back()->with('success', 'Data updated successfully');
    }

}
