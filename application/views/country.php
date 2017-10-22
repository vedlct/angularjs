


<html>


<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

<body ng-app="myApp" ng-controller="userController" >
<table >

    <tr>
        <td>name</td>
        <td>country</td>
        <td>Action</td>
    </tr>
    <tr ng-repeat="x in names">
        <td> {{x.name}}</td>
        <td>{{x.country}}</td>
        <td><button data-toggle="modal"  data-target="#edit-data" ng-click="edit(x.id)">edit</button></td>
    </tr>

</table>

<?php include ('model view.php') ?>


<div id="myModal2" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">×</span>

        <h2>Edit </h2>
        <div id="txtHint"></div>




    </div>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
    </table>

</div>

</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>


<script>
var app = angular.module('myApp', []);
app.controller('userController', function($scope, $http, ) {
    $http.get("<?php echo base_url('country/getCountry')?>")
        .then(function (response) {$scope.names = response.data;});

    $scope.edit = function(id) {
        $http({
            method: 'POST',
            url: 'country/editCountry/'+id,
            data: form,  //this is where you set the data object you want to send
        }).then(
            function(res) {
                console.log('succes !');
                //do something here
            },
            function(err) {
                console.log('error...');
            }
        );
//        $http.get('country/editCountry/' + id).then(function (data) {
//
//            $scope.form = data.data;
//            console.log(data);
//        });
    }


//    $scope.edit = function(id){
//
//
//        // $('#edit-data').load(document.URL +  ' #edit-data');
//
////        $http({
////            method : 'GET',
////            url: 'country/editCountry/'+id,
////
////        }).then(function(data){
////           // console.log(data);
////            console.log(data);
////            $scope.form = data.data;
////        });
//        // $('#edit-data').load(document.URL +  ' #edit-data');
//    }
});
</script>