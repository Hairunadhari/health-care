<form action="/admin/users/submit" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama <span style="color: red">*</span></label>
                            <input name="name" class="form-control" type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Email <span style="color: red">*</span></label>
                            <input name="email" class="form-control" type="email" required>
                        </div>
                        <div class="form-group">
                            <label>Role User <span style="color: red">*</span></label>
                            <select name="role" id="role" class="form-control">
                                <option value="pasien">Pasien</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Password <span style="color: red">*</span></label>
                            <input name="password" class="form-control" type="password" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>