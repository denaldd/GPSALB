var myApp = angular.module('admin', ['ngMaterial', 'ngRoute', 'ngCookies', 'ngAnimate', 'chart.js']);

myApp.controller('sideNavController', sideNavController);

function sideNavController($scope, $mdSidenav) {
    $scope.openLeftMenu = function() {
        $mdSidenav('left').toggle();
    };

    $scope.openRightMenu = function() {
        $mdSidenav('right').toggle();
    };
}
function inputController($scope) {
    $scope.project = {
        comments: 'Comments',
    };
}
myApp.directive('ngFiles', ['$parse', function($parse) {
    function fn_link(scope, element, attrs) {
        var onChange = $parse(attrs.ngFiles);
        element.on('change', function(event) {
            onChange(scope, {
                $files: event.target.files
            });
        });
    };
    return {
        link: fn_link
    }
}])
myApp.controller('myCntrl', function($scope, $http) {
    //Get File
    var formdata = new FormData();
    $scope.getTheFiles = function($files) {
        angular.forEach($files, function(value, key) {
            formdata.append(key, value);
        });
    };
    // NOW UPLOAD THE FILES.
    $scope.uploadFiles = function() {
        var request = {
            method: 'POST',
            url: 'uploadFile.php',
            data: formdata,
            headers: {
                'Content-Type': undefined
            }
        };
        $http(request).success(function(data) {
            $scope.msg = data.message;
            console.log(data);
        });
    }
});
myApp.controller('shtepi', shtepi);
function shtepi($scope, $http) {
    var formData = {
        lat: 'default',
        lng: 'default'
    }
    $scope.form={};
    $scope.shtepimeqera = function() {
        $http({
            url: "uploadFile.php",
            data: $scope.form,
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
            }
        }).success(function(data) {
        	//window.location.href = $scope.form.titull;
            alert('success');
        }).error(function(err) {
            "ERR",
            console.log(err)
        })
    };
};
myApp.controller('shtepishitje', shtepishitje);
function shtepishitje($scope, $http) {
    var formData = {
        lat: 'default',
        lng: 'default'
    }
    $scope.form={};
    $scope.shtepineshitje = function() {
        $http({
            url: "shtepi-ne-shitje.php",
            data: $scope.form,
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
            }
        }).success(function(data) {
            //window.location.href = $scope.form.titull;
            alert('success');
        }).error(function(err) {
            "ERR",
            console.log(err)
        })
    };
};
myApp.controller('elektronike', elektronike);
function elektronike($scope, $http) {
    var formData = {
        lat: 'default',
        lng: 'default'
    }
    $scope.form={};
    $scope.elektronike_ = function() {
        $http({
            url: "elektronike.php",
            data: $scope.form,
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
            }
        }).success(function(data) {
            //window.location.href = $scope.form.titull;
            alert('success');
        }).error(function(err) {
            "ERR",
            console.log(err)
        })
    };
};
myApp.controller('ChangeController', ['$scope', function($scope) {
    $scope.items = ['Shtepi me qera', 'Shtepi ne shitje', 'Elektronike', 'Restornate', 'Punesim', 'Makina'];
    $scope.selection = $scope.items[0];
}]);
myApp.controller('Map', function($scope) {     
$scope.initialize = function() {
    var map = new google.maps.Map(document.getElementById('map_div'), {
        center: {lat: 41.2341696, lng:  20.3582332},
        zoom: 8,
        gestureHandling: 'greedy',
        mapTypeId: 'roadmap'
    });
    var marker = new google.maps.Marker({
        position: map.getCenter(),
        draggable: true,
        map: map
    });
    google.maps.event.addListener(marker, "dragend", function (event) {
        document.getElementById('latitude').value = this.position.lat();
        document.getElementById('longitude').value = this.position.lng();

    });
}    
google.maps.event.addDomListener(window, 'load', $scope.initialize);   
});
