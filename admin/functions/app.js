'use strict';

myApp.controller('online', function($scope, $http, $sce, $interval){
this.loadNotifications = function (){
$http({method: 'GET',url: 'functions/Online.php'})
	.success(function (response) {
   		$scope.online = response;
   		if (response == 'Offline') {
   			$scope.photo = $sce.trustAsHtml('Offline <img src="img/ofline.png" style="width: 10px">');
   		} else {
   			$scope.photo = $sce.trustAsHtml('Online <img src="img/online.png" style="width: 10px">');
   		}
	}, function(response) {
   		console.log(response)
	});
};
var theInterval = $interval(function(){
  this.loadNotifications();
}.bind(this), 10000);  
});

myApp.controller('numberofposts', function($scope, $http, $sce){
$http({method: 'GET',url: 'functions/NumberOfPosts.php'})
	.success(function (response) {
   		$scope.nums = response;
	}, function(response) {
   		console.log(response)
	});
});

myApp.controller('date_registered', function($scope, $http, $sce){
$http({method: 'GET',url: 'functions/RegisteredDate.php'})
	.success(function (response) {
   		$scope.date_registered = response;
	}, function(response) {
   		console.log(response)
	});
});
//test chart
myApp.controller('MyController', function ($scope, $timeout, $http) {
    $scope.labels = ["Janar", "Shkurt", "Mars", "Prill", "Maj", "Qershor", "Korrik", "Gusht", "Shtator", "Tetor", "Nentor", "Dhjetor"];
    
    $http({method: 'GET',url: 'functions/shitjet_mujore.php'})
      .success(function (response) {
        $scope.val = response;
        $scope.data = [
          [$scope.val[0], $scope.val[1], $scope.val[2], $scope.val[3], $scope.val[4], $scope.val[5], $scope.val[6], $scope.val[7], $scope.val[8], $scope.val[9], $scope.val[10], $scope.val[0]]
        ];
      }, function(response) {
    });

  });
