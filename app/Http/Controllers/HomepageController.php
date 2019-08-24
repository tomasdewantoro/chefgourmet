<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class HomepageController extends Controller
{
    public function index() {
        $agent = new Agent();

        if($agent->isMobile()) {
            return view('public.homemobile', compact('agent'));
        }
        else {
            return view('public.home');
        }
    }
}
