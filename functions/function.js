var myApp = angular.module('firstApplication', ['ngMaterial', 'ngRoute', 'ngCookies']);

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


myApp.controller('FormCtrl', FormCtrl);

function FormCtrl($scope, $http) {

    var formData = {
        firstName: "default",
        lastName: "default",
        userEmail: "default",
        userPassword: "default",
        userAddres: "default"
    };


    $scope.submitForm = function() {

        $http({

            url: "register-form.php",
            data: $scope.form,
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
            }

        }).success(function(data) {

            alert('success');


        }).error(function(err) {
            "ERR",
            console.log(err)
        })
    };

};

//open login dialog//

myApp.config(function($mdThemingProvider) {
    $mdThemingProvider.theme('blue')
        .primaryPalette('blue');

})
myApp.controller('Login', function($scope, $mdDialog, $interval) {
    $scope.theme = 'blue';

    var isThemeRed = true;

    $interval(function() {
        $scope.theme = isThemeRed ? 'blue' : 'blue';

        isThemeRed = !isThemeRed;
    }, 2000);

    $scope.showAdvanced = function(ev) {
        $mdDialog.show({
                controller: DialogController,
                templateUrl: 'include/login-form.php',
                parent: angular.element(document.body),
                targetEvent: ev,
                clickOutsideToClose: true
            })
            .then(function(answer) {
                //$scope.status = 'You said the information was "' + answer + '".';
            }, function() {
                // $scope.status = 'You cancelled the dialog.';
            });
    };

    function DialogController($scope, $mdDialog) {
        $scope.hide = function() {
            $mdDialog.hide();
        };

        $scope.cancel = function() {
            $mdDialog.cancel();
        };

        $scope.answer = function(answer) {
            $mdDialog.hide(answer);
        };
    }
});

//close login dialog//


//Login//
myApp.controller('LoginForm', LoginForm);

function LoginForm($scope, $http) {

    var formData = {
        userMail: "default",
        userPass: "default"
    };

    $scope.submitsForm = function() {

        $http({

            url: "login-form.php",
            data: $scope.form,
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
            }

        }).success(function(data) {

        	window.location.href="admin/";

        }).error(function(err) {
            "ERR",
            console.log(err)
        })

    };

};
//Close login//
