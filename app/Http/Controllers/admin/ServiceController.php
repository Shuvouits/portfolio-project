<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Services\IntroSectionService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    protected $introSectionService;

    public function __construct(IntroSectionService $introSectionService)
    {
        $this->introSectionService = $introSectionService;

    }

    public function index()
    {
        return view('backend.component.service');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceRequest $request)
    {
        $this->introSectionService->saveIntro($request->validated());
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
