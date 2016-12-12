<?php

namespace App\Sample;

/**
 * SampleManager class
 */
class SampleManager
{
	/**
     * The application instance.
     *
     * @var \Illuminate\Foundation\Application
     */
	protected $app;

    /**
     * Create a new Cache manager instance.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    public function __construct($app)
    {
        $this->app = $app;
    }

    public function routes() {
        // sample routes
    	$this->app->router->group(['prefix' => 'sample', 'namespace' => 'Sample'], function() {
            // dashboards
    		$this->app->router->get('dashboard/{num?}', 'SampleController@index');
            // layouts
            $this->app->router->get('layouts/{type}', 'SampleController@layouts');
            // widgets
            $this->app->router->get('widgets', 'SampleController@widgets');
            // charts
            $this->app->router->get('charts/{type}', 'SampleController@charts');
            // UI
            $this->app->router->get('ui/{type}', 'SampleController@ui');
            // Forms
            $this->app->router->get('forms/{type}', 'SampleController@forms');
    	});
    }
}
