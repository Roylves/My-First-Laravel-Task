$(function() {
    //To display data inside datatable. Not related with CRUD
    var table = $('#users-table').DataTable({
        StateSave: true,
        processing: true,
        serverSide: true,
        DeferRender: true,
        ajax: 'datatable/getIndexData',
        // type: 'POST',    
        columns: [
            { data: 'rownum', name: 'rownum', searchable: false},
            { data: 'rolename', name: 'roles.name' },
            { data: 'name', name: 'name' },
            // { data: 'email', name: 'email' },
            { data: 'contact_number', name: 'contact_number' },
            { data: 'action', name: 'action', orderable: false, searchable: false},
            ]
    });
    //Reload Table
    $('.reload').click(function () {
        table.ajax.reload( null, false );
    });
    //----- Open the modal to CREATE a link -----//
    $('#btn-add').click(function () {
        $('#btn-save').val("add");
        $('#modalFormData').trigger("reset");
        $('#linkEditorModal').modal('show');
    });
    //----- Open the modal to UPDATE a link -----//
    $('body').on('click', '.open-modal', function () {
        var user_id = $(this).val();
        $.get('editing/' + user_id, function (data) {  //use edit url
            $('#user_id').val(data.id);
            $('#role_id').val(data.role_id);
            $('#name').val(data.name);
            $('#email').val(data.email);
            $('#contact_number').val(data.contact_number);
            $('#btn-save').val("update");
            $('#linkEditorModal').modal('show');
        })
    });
    // Clicking the save button on the open modal for both CREATE and UPDATE
    // Save & delete need token
    //Don't forget Base html header also need csrf_token
    $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var formData = {
            role_id: $('#role_id').val(),
            name: $('#name').val(),
            email: $('#email').val(),
            contact_number: $('#contact_number').val(),
        };
        var state = $('#btn-save').val();
        var type = "POST";
        var user_id = $('#user_id').val();
        var ajaxurl = 'creating';  //use create url
        if (state == "update") {
            type = "PUT";
            ajaxurl = 'updating/' + user_id;  //use update url
        }
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function (data) {
                alert('success');
                table.ajax.reload( null, false );
                $('#modalFormData').trigger("reset");
                $('#linkEditorModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
    //----- DELETE a link and remove from the page -----//
    $('body').on('click', '.delete-link', function () {
        var user_id = $(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "DELETE",
            url: 'remove/' + user_id,  //use delete url
            success: function (data) {
                console.log(data);
                $("#staff" + user_id).remove();
                alert(user_id);
                table.ajax.reload( null, false );
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
});