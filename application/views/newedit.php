<html>

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

<body ng-app="myApp" ng-controller="userController" >
<form method="POST" name="editItem" role="form" ng-submit="saveEdit()"  ng-repeat="form in form">
    <input ng-model="form.id" type="hidden" placeholder="Name" name="name" class="form-control" />
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Item</h4>
    </div>
    <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <label>name</label>
                    <div class="form-group">
                        <input ng-model="form.name" type="text"  name="name" class="form-control" value="{{form.name}}" required />
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <label>country</label>
                    <div class="form-group">
                        <input ng-model="form.country"  name="country" value="{{form.country}" class="form-control" required>
                        </input>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" ng-disabled="editItem.$invalid" class="btn btn-primary create-crud">Submit</button>
        </div>
    </div>
</form>





</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>


<script>
    var app = angular.module('myApp', []);


    app.controller('userController', function($scope, $http ) {


        var id = '<?php echo $id;?>';
            $http.get("<?php echo base_url('country/editCountry/')?>"+ id).then(function (data) {

                $scope.form = data.data;
                console.log(data);
            });



    });
</script>