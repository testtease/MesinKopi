jQuery(function($) {
    "use strict";

    var example = $('#example').DataTable({
    responsive: true,
    'fnDrawCallback': function(oSettings) {
    $('#example_paginate ul').addClass('pagination-active-success');
    },
    "ajax": ""+base_url+"crud/get_all",
    'columns': [
    { 'data': 'nama' },
    { 'data': 'email' },
    { 'data': 'telp' },
    { 'data': 'foto' },
    { 'data': 'aksi' },
    ],
    'order': [[1, 'asc']]
    });

	
    $('body').on('click', '.edit', function(e) {
        e.preventDefault();
        var id = this.id;
        
        if (id == 0)
        {
          $("#txtfoto").prop('required',true);
        }
        
        $.ajax({
            type : "POST",
            url  : ""+base_url+"crud/get_data_id",
            data : {id : id} ,
            success : function(data){
                $("#txtid").val(data.id);
                $("#txtnama").val(data.nama);
                $("#txtemail").val(data.email);
                $("#txthp").val(data.telp);
            }
        });
    });

   
    $('body').on('click', '.delete', function(e) {
        e.preventDefault();
        var id = this.id;

        swal({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!',
          closeOnConfirm: false
        },
        function(isConfirm) {
          if (isConfirm) {
            $.ajax({
                type : "POST",
                url  : ""+base_url+"crud/delete",
                data : {id : id} ,
                success : function(data){
					swal(
                      'Deleted!',
                      'Your file has been deleted.',
                      'success'
                    );
                    $('#example').DataTable().ajax.reload(null, false);
                }
            });
          }
        })        
    });

	$('#MyForm').ajaxForm({
		beforeSend:function(){
		
		},
		success:function(){
		},
		complete:function(data)
		{	
			$('.modal').modal('hide');
			
			$('#example').DataTable().ajax.reload(null, false);
			swal("Good job!", "You clicked the button!", "success");
		}
	});
  
  //called when key is pressed in textbox
	$('body').on('keypress', '.number', function(e) {
	//$(".number").keypress(function (e) {
		//if the letter is not digit then display error and don't type anything
		if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
		//display error message
		$("#errmsg").html("Number Only").show().fadeOut("slow");
		return false;
		}
	});


});