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
            url: 'uploads.php',
            data: formdata,
            headers: {
                'Content-Type': undefined
            }
        };
        $http(request).success(function(data) {
            alert('Success');
            window.location.href='../';
        });
    }
});