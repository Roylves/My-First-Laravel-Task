@extends('layouts.kktinner')
 
@section('content')
<style>
 p.label-entrypoint.required:after { content:" *"; color: red; }
 .alert span.red-star {
   color: red;
 }
 .table {
   width: 100%;
   margin-bottom: 50px;
 }
 .table tbody tr td {
   width: 16.6%;
   vertical-align:middle;
   height: 5em;
 }
 .table td img {
   max-width: 70px;
   height: 70px
 }
 .content {
   background-color: #FFF;
   margin-top:32px;
   margin-bottom: 96px;
   border-color: #ddd;
   border-style: solid;
   border-width: thin;
   /*min-height:1432px;*/
 }
 .ico-mail {
   background: url(../images/ico-envelope.png) no-repeat 0 0;
   width: 20px;
 }
 .alert.alert-support-contact {
   background-color: #FFF5D3;
   /*height: 100px;*/

   padding-top: 12px;
   padding-left: 20px
 }
 .alert {
   padding: 10px;
 }
 .alert img {
   width: 56px;
   height: 56px;
   display: inline-block;
 }
 .alert .ico-envelope {
   width: 20px;
   height: 20px;
   margin-bottom: 4px;
 }
 .alert .col-md-* {
   padding: 0px;
 }
 .alert span {
   display: inline-block;
   padding-top: 4px;
   padding-left: 5px;
   padding-right: 12px;
 }
 .alert .alert-info-text {
   font-size: 14px;
   color: #384343;
   padding: 2px;
 }
 .alert .alert-info-text-bold {
   font-weight: 600;
   font-size: 16px;

   color: #384343;
   margin-top: 25px;
 }
 .alert .alert-contact-name {
   font-weight: 600;
   font-size: 16px;
   color: #E18C44;

   padding-top:10px;
 }
 .alert .ico-envelope {
   margin-top: 4px;
 }
 .alert a {
   text-decoration: underline;

   font-size: 13px;
   color: #333333
 }
 .round img {
   display: block;
   border-radius: 50%;
 }
 .alert h4 {
   margin-bottom: 8px;
 }
 
th ,td {
    border: 2px solid black;
    text-align:center;
}
table {
    border: 2px solid black;
}
</style>
 
<div class="container content">
  <div class="row">
    <div class="col-md-offset-1 col-md-10">
      <section class="section">
          <div class="section-head">
            <h2 class="section-title" style="text-decoration: underline">Employees Status</h2>
            <p>Place to manage company's employees. . .</p>
          </div>
 
        <section class="section-secondary">
          <div class="section-body" style="margin-top:1.5em">
            <button id="btn-add" name="btn-add" class="btn btn-primary btn-xs">Add New Link</button>
            <div style="padding-top:1em">
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
            </div>
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
                            <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes
                            </button>
                            <input type="hidden" id="user_id" name="user_id" value="0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
 
@endsection