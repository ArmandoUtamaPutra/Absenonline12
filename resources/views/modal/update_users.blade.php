<div id="update_users" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('update_peserta') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="inputEmail4">Users</label>
                        <input type="text" name="nama" class="form-control" id="inputEmail4" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail4">Password</label>
                        <input type="text" name="nama" class="form-control" id="inputEmail4" placeholder="">
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" name="close" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
