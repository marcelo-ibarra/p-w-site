// configure our routes
app.config(function($routeProvider, $locationProvider) {
	$routeProvider

	// route for the about page
		.when('/', {
			controller  : 'aboutController',
			templateUrl : 'angular/views/about.php'
		})

		// route for the contact page
		.when('/contact', {
			controller  : 'contactController',
			templateUrl : 'angular/views/contact.php'
		})

		// route for the home page
		.when('/home', {
			controller  : 'homeController',
			templateUrl : 'angular/views/home.php'
		})

		// route for the portfolio page
		.when('/portfolio', {
			controller  : 'portfolioController',
			templateUrl : 'angular/views/portfolio.php'
		})

		// otherwise redirect to about
		.otherwise({
			redirectTo: '/'
		});

	//use the HTML5 History API
	$locationProvider.html5Mode(true);
});
