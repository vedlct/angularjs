<div ng-app="myApp" ng-controller="userController" >
<form method="POST" name="editItem" role="form" ng-submit="saveEdit()">
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
                                    <input ng-model="form.name" type="text"  name="title" class="form-control" required />
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <label>country</label>
                                <div class="form-group">
                               <input ng-model="form.country"  class="form-control" required>
                                </input>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" ng-disabled="editItem.$invalid" class="btn btn-primary create-crud">Submit</button>
                    </div>
                </div>
            </form>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

