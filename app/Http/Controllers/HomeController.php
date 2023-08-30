<?php

namespace App\Http\Controllers;

use App\Models\SiteSettings;

class HomeController extends Controller
{
    public function __invoke()
    {
        $siteSettings = SiteSettings::first();

        return view('welcome', compact('siteSettings'));
    }
}
