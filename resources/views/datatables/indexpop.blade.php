<div class="modal fade" id="linkEditorModal" aria-hidden="true">
                <div class="modal-dialog" style="width:30em">
                    <div class="modal-content" style="padding-left:1em">
                        <div class="modal-header">
                            <h4 class="modal-title" id="linkEditorModalLabel">Register/Update</h4>
                        </div>
                        <div class="modal-body">
                            <form id="modalFormData" name="modalFormData" class="form-horizontal" novalidate="">
 
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control" id="name" name="name"
                                               placeholder="Employees Name" value="">
                                    </div>
                                </div>
 
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control" id="email" name="email"
                                        placeholder="Employees Email" value="">
                                    </div>
                                </div>

                                <div class="form-group" style="margin-bottom:0em; position:relative; left:-1.5em">
                                <label class="col-sm-5 control-label">Contact Number</label>
                                <label class="col-sm-4 control-label">Role</label>
                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="contact_number" name="contact_number"
                                        placeholder="Employees contact number" value="">
                                    </div>

                                    <div class="col-sm-4" style="padding-left:0em">
                                        <div class="ui-widget">
                                          <select id="role_id" name="role_id" class="form-control selectpicker" required>
                                            <option value="" disabled selected style="display:none">Position</option>
                                            @foreach($roles as $role)
                                            <option value="{{ $role->id }}">
                                                      {{ $role->name }}
                                            </option>
                                            @endforeach
                                          </select>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer" style="padding-right:3.4em">
                            <button type="button" class="btn btn-primary" id="btn-save" value="add">
                            <i class="glyphicon glyphicon-floppy-saved"></i> Save changes
                            </button>
                            <input type="hidden" id="user_id" name="user_id" value="0">
                        </div>
                    </div>
                </div>
            </div>