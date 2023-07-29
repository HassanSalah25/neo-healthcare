<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

class LocalizationController extends Controller
{
    //
    public function changeLanguage($locale)
    {
        if (in_array($locale, ['en', 'ar'])) {
            App::setLocale($locale);
        }

        return Redirect::back();
    }
}
