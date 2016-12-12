const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

var paths = {
	js: 'resources/assets/js/',
	jquery: './bower_components/jquery/dist/',
	bootstrap: './bower_components/bootstrap-sass/',
	fontawesome: './bower_components/font-awesome/',
};

elixir((mix) => {
	// Stylesheets
	// Less
    mix.less('theme.less')
		.less('skins/skin-blue.less', 'public/css/skins')
		.less('skins/skin-black.less', 'public/css/skins')
		.less('skins/skin-yellow.less', 'public/css/skins')
		.less('skins/skin-green.less', 'public/css/skins')
		.less('skins/skin-red.less', 'public/css/skins')
		.less('skins/skin-purple.less', 'public/css/skins')
		.less('skins/skin-blue-light.less', 'public/css/skins')
		.less('skins/skin-black-light.less', 'public/css/skins')
		.less('skins/skin-yellow-light.less', 'public/css/skins')
		.less('skins/skin-green-light.less', 'public/css/skins')
		.less('skins/skin-red-light.less', 'public/css/skins')
		.less('skins/skin-purple-light.less', 'public/css/skins')
		.less('skins/_all-skins.less', 'public/css/skins');
	// Sass
	mix.sass('app.scss')
		.copy(paths.bootstrap + 'assets/fonts/**', 'public/build/fonts')
		.copy(paths.fontawesome + 'fonts/**', 'public/build/fonts');

	// Scripts
	mix.scripts([
        paths.jquery + 'jquery.min.js',
        paths.bootstrap + 'assets/javascripts/bootstrap.min.js',
		], 'public/js/vendor.js')
		.scripts(['admin-lte.js'], 'public/js/theme.js');

	// Webpack
	mix.webpack('app.js');

	// Versioning
	mix.version([
        'public/css/app.css',
        'public/css/theme.css',
        'public/js/app.js',
        'public/js/vendor.js',
        'public/js/theme.js',
    ]);
});
