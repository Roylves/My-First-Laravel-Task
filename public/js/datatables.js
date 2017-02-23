$(document).on("click","#btnsave",function(){
      var id_cust = $("#txtid").val();
      var name = $("#txtname").val();
      var gender = $("#cbogender").val();
      var country = $("#txtcountry").val();
      var phone = $("#txtphone").val();
      var crud=$("#crudmethod").val();
      if(name == '' || name == null ){
        swal("Warning","Please fill customer name","warning");
        $("#txtname").focus();
        return;
      }
      var value = {
        id_cust: id_cust,
        name: name,
        gender:gender,
        country:country,
        phone:phone,
        crud:crud
      };
      $.ajax(
      {
        url : "save.php",
        type: "POST",
        data : value,
        success: function(data, textStatus, jqXHR)
        {
          var data = jQuery.parseJSON(data);
          if(data.crud == 'N'){
            if(data.result == 1){
              $.notify('Successfull save data');
              var table = $('#table_cust').DataTable(); 
              table.ajax.reload( null, false );
              $("#txtname").focus();
              $("#txtname").val("");
              $("#txtcountry").val("");
              $("#txtphone").val("");
              $("#crudmethod").val("N");
              $("#txtid").val("0");
              $("#txtnama").focus();
            }else{
              swal("Error","Can't save customer data, error : "+data.error,"error");
            }
          }else if(data.crud == 'E'){
            if(data.result == 1){
              $.notify('Successfull update data');
              var table = $('#table_cust').DataTable(); 
              table.ajax.reload( null, false );
              $("#txtname").focus();
            }else{
             swal("Error","Can't update customer data, error : "+data.error,"error");
            }
          }else{
            swal("Error","invalid order","error");
          }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
           swal("Error!", textStatus, "error");
        }
      });
    });