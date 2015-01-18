(function(){
	var app = angular.module('myApp', [ ]);


	app.directive('loginForm' , function(){
	return {
		restrict:  'E' ,
		templateUrl: 'views/login/login-form.php'
	};
});

})();