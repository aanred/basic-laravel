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
    	$this->app->router->group(['prefix' => 'sample', 'namespace' => 'Sample'], function() {
    		$this->app->router->get('dashboard', 'DashboardController@index');
    	});
    }
}
