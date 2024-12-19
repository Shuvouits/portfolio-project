<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OtherRequest;
use App\Models\GeneralSetting;
use App\Services\OtherService;
use Illuminate\Http\Request;

class OtherController extends Controller
{
    protected $otherService;

    public function __construct(OtherService $otherService)
    {
        $this->otherService = $otherService;
    }



    public function index()
    {
        $general_setting = GeneralSetting::first();
        return view('backend.component.other', compact('general_setting'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(OtherRequest $request)
    {
        $this->otherService->saveOther($request->validated(), $request->file('logo'));

        return redirect()->back()->with('success', 'Data information updated successfully!');
    }




}
