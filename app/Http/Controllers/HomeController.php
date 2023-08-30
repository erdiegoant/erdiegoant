<?php

namespace App\Http\Controllers;

use App\Models\SiteSettings;

class HomeController extends Controller
{
    public function __invoke()
    {
        $siteSettings = SiteSettings::first();
        $avatar = $siteSettings->getFirstMedia('avatar');
        $social = $siteSettings->getFirstMediaUrl('social');

        return view('welcome', compact('siteSettings', 'avatar', 'social'));
    }
}
