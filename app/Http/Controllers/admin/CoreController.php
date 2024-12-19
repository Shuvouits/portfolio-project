<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CoreRequest;
use App\Models\Core;
use App\Models\CoreInfo;
use Illuminate\Http\Request;
use App\Services\CoreService;

class CoreController extends Controller
{

    protected $coreService;

    public function __construct(CoreService $coreService)
    {
        $this->coreService = $coreService;

    }


    public function index()
    {
        $core = Core::first();
        $coreInfo = CoreInfo::all();
        return view('backend.component.core', compact('core', 'coreInfo'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(CoreRequest $request)
    {
        $this->coreService->saveCore($request->validated());
        return redirect()->back()->with('success', 'Data updated successfully');
    }




}
