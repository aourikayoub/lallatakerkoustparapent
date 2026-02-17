<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Lang extends Controller
{
    public function LangSwicher($locale) {
        if (! in_array($locale , config('app.Local_langs'))) {
            abort(404);
        }
        Session::put('locale', $locale);
        return redirect()->back();
    }
}
