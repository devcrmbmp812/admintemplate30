<div class="modal fade user-add-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Add New User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="/apps/users/app_users.php" method="POST">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="example_input_first_name">First Name:</label>
                            <input type="text" name="first_name" class="form-control" placeholder="Enter first name">
                        </div>
                        <div class="form-group">
                            <label for="example_input_last_name">Last Name:</label>
                            <input type="text" name="last_name" class="form-control" placeholder="Enter last name">
                        </div>
                        <div class="form-group">
                            <label>Email address:</label>
                            <input type="email" name="user_email" class="form-control" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label>Phone No:</label>
                            <input type="tel" name="phone_no" class="form-control" placeholder="Phone number">
                        </div>
                        <div class="form-group">
                            <label>Note:</label>
                            <input type="text" name="note" class="form-control" placeholder="Note">
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success pull-right">Submit</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>