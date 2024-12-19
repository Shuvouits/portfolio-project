<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CoreInfoRequest;
use Illuminate\Http\Request;
use App\Services\CoreInfoService;

class CoreInfoController extends Controller
{

    protected $coreInfoService;

    public function __construct(CoreInfoService $coreInfoService)
    {
        $this->coreInfoService = $coreInfoService;


    }


    public function store(CoreInfoRequest $request)
    {
        //dd($request->validated());
        $this->coreInfoService->saveCore($request->validated(), $request->file('image') );
        return redirect()->back()->with('success', 'Data updated successfully');
    }


}
