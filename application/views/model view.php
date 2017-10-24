<!--<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">-->
<!--    <div class="modal-dialog modal-lg">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                    <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>-->
<!--                </button>-->
<!--                <h4 class="modal-title">Edit Person</h4>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                <div class="form-group">-->
<!--                    <label>Name:</label>-->
<!--                    <input ng-model="model.person.name" class="form-control">-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="modal-footer">-->
<!--                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="modal fade" id="edit-data" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
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
                                    <input data-ng-model="form.name" type="text"  name="name" class="form-control" value="{{form.name}}" required />
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <label>country</label>
                                <div class="form-group">
                                    <input data-ng-model="form.country"  name="country" value="{{form.country}" class="form-control" required>
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
    </div>
</div>