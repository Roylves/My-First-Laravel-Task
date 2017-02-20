$(document).ready(function () {
    ////----- Open the modal to CREATE a link -----////
    $('#btn-add').click(function () {
        $('#btn-save').val("add");
        $('#modalFormData').trigger("reset");
        $('#linkEditorModal').modal('show');
    });
 
    ////----- Open the modal to UPDATE a link -----////
    $('body').on('click', '.open-modal', function () {
        var user_id = $(this).val();
        $.get('edit/' + user_id, function (data) {  //use edit url
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
            success: function (data) {
                var user = '<tr id="user' + data.id + '"><td>' + data.id + '</td><td>' + data.role_id + '</td><td>' + data.name + '</td><td>' + data.email + '</td><td>' + data.contact_number + '</td>';
                user += '<td><button class="btn btn-info open-modal" value="' + data.id + '">Edit</button> ';
                user += '<button class="btn btn-danger delete-link" value="' + data.id + '">Delete</button></td></tr>';
                if (state == "add") {
                    $('#links-list').append(user);
                } else {
                    $("#user" + user_id).replaceWith(user);
                }
                $('#modalFormData').trigger("reset");
                $('#linkEditorModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
 
    ////----- DELETE a link and remove from the page -----////
    $('body').on('click', '.delete-link', function () {
        var user_id = $(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "DELETE",
            url: 'delete/' + user_id,  //use delete url
            success: function (data) {
                console.log(data);
                $("#user" + user_id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
});