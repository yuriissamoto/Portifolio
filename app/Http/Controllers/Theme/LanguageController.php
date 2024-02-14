<?php

namespace App\Http\Controllers\Theme;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    //
    public function setLocale($locale)
    {
        if (in_array($locale, ['en', 'pt_BR'])) {
            App::setLocale($locale);
            Session::put('locale', $locale); // Armazena o idioma na sessão
        }

        return redirect()->back();
    }
}
