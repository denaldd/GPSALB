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

myApp.controller('getPhoto', function($scope, $http, $sce, $interval){
this.getPhoto = function (){
$http({method: 'GET',url: 'getPhoto.php'})
    .success(function (response) {
        $scope.photos = $sce.trustAsHtml(response);
    }, function(response) {
    });
};
var theInterval = $interval(function(){
  this.getPhoto();
}.bind(this), 1000); 
});

/*
SELECT post_id FROM photos WHERE user_id = 19 ORDER BY post_id DESC LIMIT 1*/

/*SELECT DISTINCT photos.photo_name FROM markers 
LEFT JOIN car ON car.user_id = markers.user_id
LEFT JOIN elektronike ON elektronike.user_id = markers.user_id
LEFT JOIN shtepimeqera ON shtepimeqera.user_id = markers.user_id
LEFT JOIN shtepineshitje ON shtepineshitje.user_id = markers.user_id
LEFT JOIN work ON work.user_id = work.user_id
LEFT JOIN photos ON photos.user_id = markers.user_id
WHERE markers.user_id = 19 AND photos.post_id = 9*/

/*SELECT photos.photo_name FROM photos WHERE photos.user_id = 19 AND photos.post_id = 9 */