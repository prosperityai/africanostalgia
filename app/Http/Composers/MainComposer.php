<?php

namespace App\Http\Composers;

use Illuminate\View\View;
use App\Country;

class MainComposer
{

    public function compose(View $view)
    {
        $view->with('country', Country::all());
    }
}