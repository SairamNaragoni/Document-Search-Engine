$("#upload").click(function(event){
	event.preventDefault();
	var title = $('#title').val();
	var description = $('#description').val();
	var tags = $('#tags').val();
	var property = document.getElementById('file').files[0];
    var form_data = new FormData();
    form_data.append("file",property);
    form_data.append("title",title);
    form_data.append("description",description);
    form_data.append("tags",tags); 
    $.ajax({
        url: "ajax/upload.php",
        type: 'POST',
        data: form_data,
        async: false,
        success: function (data) {
           alert(data);
          document.getElementById("uForm").reset(); 
        },
        cache: false,
        contentType: false,
        processData: false
    });
    return false;
});

$("#update").click(function(event){
    event.preventDefault();
    var id = $('#row_id').text();
    var title = $('#title').val();
    var description = $('#description').val();
    var tags = $('#tags').val();
    var property = document.getElementById('file').files[0];
    var form_data = new FormData();
    form_data.append("file",property);
    form_data.append("title",title);
    form_data.append("description",description);
    form_data.append("tags",tags); 
    form_data.append("id",id); 
    $.ajax({
        url: "ajax/updatefile.php",
        type: 'POST',
        data: form_data,
        async: false,
        success: function (data) {
            alert(data);
            window.location = 'index.php';
            /*
            $('#uploadT').removeClass('is-active');
            $('#view_db').addClass('is-active');
            $('#scroll-tab-1').hide();
            $('#scroll-tab-2').show();
            $('#view_db').trigger('click');  
            document.getElementById("uForm").reset();*/
        },
        cache: false,
        contentType: false,
        processData: false
    });
    return false;
});


$("#view_db").on('click',function(){
	$.ajax({
        url: "ajax/updateview.php",
        method: "post",
        dataType: 'html',
        success: function (data) {
           $("#trows").html(data);
        }
    });
});
$("#admins").on('click',function(){
	$.ajax({
        url: "ajax/updateadmin.php",
        method: "post",
        dataType: 'html',
        success: function (data) {
           //alert(data);
           $("#trows2").html(data);
        }
    });
});

$(document).on('click', ".delete", function() {
    var c = confirm("Confirm Delete");
    if(c)
    {
        var id = $(this).attr('id');
        $.ajax({
            url: "ajax/delete.php",
            method: "post",
            data: '&id='+id,
            success: function (data) {
               // alert(data);
               $('#view_db').trigger('click');  
            }
        });    

    }
    else
    {
        alert("cancelled");
    }
       
});



