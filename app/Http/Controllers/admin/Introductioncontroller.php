<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\IntroRequest;
use App\Models\Intro;
use Illuminate\Http\Request;
use App\Services\IntroService;

class Introductioncontroller extends Controller
{

    protected $introService;

    public function __construct(IntroService $introService)
    {
        $this->introService = $introService;
    }


    public function index()
    {
        $intro = Intro::first();
        return view('backend.component.intro', compact('intro'));
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
    public function store(IntroRequest $request)
    {

        // Pass data and files to the service
        $this->introService->saveIntro($request->validated(), $request->file('photo'), $request->file('resume'));

        return redirect()->back()->with('success', 'Intro details saved successfully!');
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
