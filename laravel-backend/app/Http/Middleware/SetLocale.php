<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $raw_locale = $request->session()->get('locale');
        if ($raw_locale && in_array($raw_locale, Config::get('app.locales'))) {
            $locale = $raw_locale;
        } else {
            $locale = Config::get('app.locales');
        }
        App::setLocale($locale);
        // dd('Localization middleware chạy rồi');
        return $next($request);
    }
}
