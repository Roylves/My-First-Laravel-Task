@extends('layouts.master')

@section('content')
<style>
thead tr th, tbody tr td {
    text-align:center;
}
/*customize looks of specific element*/
/*table.datatables {
    width:10px;
}*/
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
                <button id="btn-add" name="btn-add" class="btn btn-primary create"><i class="glyphicon glyphicon-user"></i> Register new employees</button>
                <button class="btn btn-info open-modal"><i class="glyphicon glyphicon-edit"></i>Edit</button>
                <button class="btn btn-danger delete-link"><i class="glyphicon glyphicon-remove"></i>Delete</button>
    <div style="padding-top:1em">
    <table class="table table-bordered table-inverse" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Role</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Actions</th>
            </tr>
        </thead>
    </table>
    </div>
    </div>
    </div>
    </div>
</div>
    @include('datatables.indexpop')
@stop

@push('scripts')
<script>
$(function() {
    // var table = $('#users-table').DataTable({
    //     // order: [0, 'asc'],  order number by ascending(asc)/descending(desc)
    //     stateSave: true,
    //     processing: true,
    //     serverSide: true,
    //     ajax: '{{url('datatable/getposts')}}',
    //     type: 'POST',
    //     columns: [
    //         { data: 'rownum', name: 'rownum' },
    //         { data: 'rolename', name: 'roles.name' },
    //         { data: 'name', name: 'name' },
    //         { data: 'email', name: 'email' },
    //         { data: 'contact_number', name: 'contact_number' }
    //         // {data: 'action', name: 'action', orderable: false, searchable: false}
    //     ],
    // });

    ////----- Open the modal to CREATE a link -----////
    $('#btn-add').click(function () {
        $('#btn-save').val("add");
        $('#modalFormData').trigger("reset");
        $('#linkEditorModal').modal('show');
    });

    // ////----- Open the modal to UPDATE a link -----////
    // $('body').on('click', '.open-modal', function () {
    //     var user_id = $(this).val();
    //     $.get('edit/' + user_id, function (data) {  //use edit url
    //         $('#user_id').val(data.id);
    //         $('#role_id').val(data.role_id);
    //         $('#name').val(data.name);
    //         $('#email').val(data.email);
    //         $('#contact_number').val(data.contact_number);
    //         $('#btn-save').val("update");
    //         $('#linkEditorModal').modal('show');
    //     })
    // });

    // Clicking the save button on the open modal for both CREATE and UPDATE
    // Save & delete need token
    $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var formData = {
            role: $('#rolename').val(),
            name: $('#name').val(),
            email: $('#email').val(),
            contact_number: $('#contact_number').val(),
        };
        var state = $('#btn-save').val();
        var type = "POST";
        var user_id = $('#user_id').val();
        var ajaxurl = 'create';  //use create url
        if (state == "update") {
            type = "PUT";
            ajaxurl = 'update/' + user_id;  //use update url
        }
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function(data, textStatus, jqXHR)
        {
          var user = '<tr id="user' + data.id + '"><td>' + data.id + '</td><td>' + data.role_id + '</td><td>' + data.name + '</td><td>' + data.email + '</td><td>' + data.contact_number + '</td>';
                user += '<td><button class="btn btn-info open-modal" value="' + data.id + '">Edit</button> ';
                user += '<button class="btn btn-danger delete-link" value="' + data.id + '">Delete</button></td></tr>';
              var table = $('#users-table').DataTable(); 
              table.ajax.reload( null, false );
              $('#rolename').val();
            $('#name').val();
            $('#email').val();
            $('#contact_number').val();
            if (state == "add") {
                    $('#links-list').append(user);
                } else {
                    $("#user" + user_id).replaceWith(user);
                }
          $('#modalFormData').trigger("reset");
          $('#linkEditorModal').modal('hide')
        },
        error: function(data)
        {
           console.log('Error:', data);
        }
      });
    });
});
</script>
@endpush