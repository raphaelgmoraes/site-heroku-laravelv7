const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');

/*
 *
 * ############################################
 * ### LARAVEL MIX :: PARAMETRIZAÇÃO ASSETS ###
 * ############################################
 * ### mix .style(['origem'],'destino');    ###
 * ############################################
 */

mix
	.styles([
		'resources/views/front/assets/css/style.min.css'
	],  'public/front/assets/css/style.css')

	.styles([
		'resources/views/front/assets/css/bootstrap.min.css', 
		'resources/views/front/assets/css/lightcase.css',
		'resources/views/front/assets/css/owl.carousel.min.css',
		'resources/views/front/assets/css/select2.min.css'
	], 	'public/front/assets/css/vendor.css')

	.scripts([
		'resources/views/front/assets/js/app.min.js'
	],  'public/front/assets/js/app.js')

	.scripts([
		'resources/views/front/assets/js/bootstrap.min.js',
		'resources/views/front/assets/js/isotope.min.js',
		'resources/views/front/assets/js/jquery.CountTo.js',
		'resources/views/front/assets/js/jquery.stellar.js',
		'resources/views/front/assets/js/lightcase.js',
		'resources/views/front/assets/js/owl.carousel.min.js',
		'resources/views/front/assets/js/popper.min.js',
		'resources/views/front/assets/js/select2.min.js',
		'resources/views/front/assets/js/waypoint.min.js'
	],  'public/front/assets/js/vendor.js')

	// .copyDirectory('resources/views/front/assets/fonts', 'public/front/assets/fonts')
	.copyDirectory('resources/views/front/assets/img', 'public/front/assets/img')
	
	.options({
		processCssUrls: false
	})

	.version();