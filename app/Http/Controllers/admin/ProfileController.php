<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\GeneralSetting;
use App\Services\ProfileService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    protected $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }



    public function index()
    {
        $general_setting = GeneralSetting::first();
        return view('backend.profile.index');
    }



    public function store(UserRequest $request)
    {
        // Pass data and files to the service
        $this->profileService->saveProfile($request->validated(), $request->file('image'));

        return redirect()->back()->with('success', 'Intro details saved successfully!');
    }


    public function update(Request $request, string $id)
    {
        // Validate the form data
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8',
            'confoirm_password' => 'required|same:new_password',
        ]);

        try {

            // Get the authenticated user
            $user = Auth::user();

            // Check if the old password matches
            if (!Hash::check($request->old_password, $user->password)) {
                return back()->withErrors(['old_password' => 'The current password does not match.']);
            }

            // Update the user's password
            $user->password = Hash::make($request->new_password);
            $user->save();

            // Redirect with a success message
            return back()->with('success', 'Password updated successfully.');
        } catch (Exception $e) {

            // Return an error message
            return back()->withErrors(['error' => 'An unexpected error occurred. Please try again later.']);
        }
    }
}
