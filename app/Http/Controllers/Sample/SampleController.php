<?php

namespace App\Http\Controllers\Sample;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SampleController extends Controller
{
	/**
     * Show the sample dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($num = 1) {
    	return view('sample.dashboard-' . $num, [
    		'title' => 'Dashboard'
    		]);
    }

    /**
     * Show the sample layouts.
     *
     * @return \Illuminate\Http\Response
     */
    public function layouts($type) {
    	return view('sample.layout-opts.' . $type, [
    		'title' => 'Layouts'
    		]);
    }

    /**
     * Show the sample widgets.
     *
     * @return \Illuminate\Http\Response
     */
    public function widgets() {
    	return view('sample.widgets', [
    		'title' => 'Widgets'
    		]);
    }

    /**
     * Show the sample charts.
     *
     * @return \Illuminate\Http\Response
     */
    public function charts($type) {
    	return view('sample.charts.' . $type, [
    		'title' => 'Charts'
    		]);
    }

    /**
     * Show the sample UI.
     *
     * @return \Illuminate\Http\Response
     */
    public function ui($type) {
    	return view('sample.ui.' . $type, [
    		'title' => 'UI'
    		]);
    }

    /**
     * Show the sample forms.
     *
     * @return \Illuminate\Http\Response
     */
    public function forms($type) {
    	return view('sample.forms.' . $type, [
    		'title' => 'Forms'
    		]);
    }
}
