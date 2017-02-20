@extends('layouts.kktinner')
 
@section('content')
<style>
th {
    text-align:center;
}
</style>
 
    <div class="container">
 
        <div class="card card-block">
            <h2 style="text-decoration: underline" class="card-title">Employees Status</h2><br/>

            <button id="btn-add" name="btn-add" class="btn btn-primary btn-xs">Add New Link</button>
        </div>
 
        <div>
            <table class="table table-inverse">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Role</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="links-list" name="links-list">
                <!-- already denote users as links in web route -->
                @foreach ($users as $key => $u)
                    <tr id="user{{$u->id}}">
                        <td> {{ $key + $users->firstItem() }}</td>
                        <td>{{$u->rolename}}</td>
                        <td>{{$u->name}}</td>
                        <td>{{$u->email}}</td>
                        <td>{{$u->contact_number}}</td>
                        <td>
                            <button class="btn btn-info open-modal" value="{{$u->id}}">Edit
                            </button>
                            <button class="btn btn-danger delete-link" value="{{$u->id}}">Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        <!-- Pagination check pagination tutor at Laracast 5.4 -->
        <p class="psize">{{ $users->lastItem() }} / {{ $users->total() }} items</p>
        <hr style="margin: 0em; width:50em">
        <p>{{ $users->links() }} &nbsp; pages </p>
 
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

                                <div class="form-group">
                                    <label class="col-sm-5 control-label" style="margin-bottom:0em; position:relative; left:-2em">Company Name</label>
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control" id="company_name" name="Company_name"
                                        placeholder="Company Name" value="">
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

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-11">
                                        <input type="text" class="form-control" id="password" name="password"
                                        placeholder="Company Name" value="">
                                    </div>

                                    
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer" style="padding-right:3.4em">
                            <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes
                            </button>
                            <input type="hidden" id="user_id" name="user_id" value="0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
@endsection