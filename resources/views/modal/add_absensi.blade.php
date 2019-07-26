<div id="absensi" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('add_peserta') }}" method="POST">
                        @csrf
                            
                            <div class="form-group">
                                    <label for="inputEmail4">Name</label>
                                    <textarea name="name" class="form-control" id="inputEmail4" placeholder="Nama"></textarea>
                                </div>
                                <div class="form-group">
                                        <label for="inputEmail4">Time</label>
                                        <textarea name="time" class="form-control" id="inputEmail4" placeholder=""></textarea>
                                    </div>
                                    <div class="form-group">
                                            <label for="inputEmail4">Last Time</label>
                                            <textarea name="last_time" class="form-control" id="inputEmail4" placeholder=""></textarea>
                                        </div>
                                        <div class="form-group">
                                                <label for="inputEmail4">Date</label>
                                                <textarea name="date" class="form-control" id="inputEmail4" placeholder=""></textarea>
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
