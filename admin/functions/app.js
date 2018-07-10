myApp.controller('online', function($scope, $http, $sce){
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
});

myApp.controller('numberofposts', function($scope, $http, $sce){
$http({method: 'GET',url: 'functions/NumberOfPosts.php'})
	.success(function (response) {
   		$scope.nums = response;
   		//$scope.photo = $sce.trustAsHtml('Online <img src="img/online.png" style="width: 10px">');
	}, function(response) {
   		console.log(response)
	});
});

myApp.controller('date_registered', function($scope, $http, $sce){
$http({method: 'GET',url: 'functions/RegisteredDate.php'})
	.success(function (response) {
   		$scope.date_registered = response;
   		//$scope.photo = $sce.trustAsHtml('Online <img src="img/online.png" style="width: 10px">');
	}, function(response) {
   		console.log(response)
	});
});
//test chart
myApp.controller('MyController', function ($scope, $timeout) {
    $scope.labels = ["January", "February", "March", "April", "May", "June", "July"];
    $scope.series = ['Series A', 'Series B'];
    $scope.data = [
      [65, 59, 80, 81, 56, 55, 40],
      [28, 48, 40, 19, 86, 27, 90]
    ];
    $scope.onClick = function (points, evt) {
      console.log(points, evt);
    };

    // Simulate async data update
    $timeout(function () {
      $scope.data = [
        [28, 48, 40, 19, 86, 27, 90],
        [65, 59, 80, 81, 56, 55, 40]
      ];
    }, 3000);
  });
