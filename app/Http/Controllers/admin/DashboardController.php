<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){

        $all_contact = Contact::latest()->get();
        return view('backend.index', compact('all_contact'));
    }
}
