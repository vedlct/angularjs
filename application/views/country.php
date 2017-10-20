


<html>
<body ng-app="myApp">
<table ng-controller="userController" >

    <tr>
        <td>name</td>
        <td>country</td>
    </tr>
    <tr ng-repeat="x in names">
        <td> {{x.name}}</td>
        <td>{{x.country}}</td>
    </tr>

</table>
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>


<script>
var app = angular.module('myApp', []);
app.controller('userController', function($scope, $http) {
    $http.get("<?php echo base_url('country/getCountry')?>")
        .then(function (response) {$scope.names = response.data;});
});
</script>