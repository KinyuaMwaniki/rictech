<?php

namespace App\Http\Controllers;

use App\CompanyDetail;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $company_detail = CompanyDetail::all()->first();
        return view('frontend.landing', compact('company_detail'));
    }
}
