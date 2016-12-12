<?php

namespace App\Http\Controllers\Sample;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index($num = 1) {
    	return view('sample.dashboard-' . $num, [
    		'title' => 'Dashboard v' . $num
    		]);
    }
}
