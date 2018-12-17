var key ;

$.urlParam = function(name){
	var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	return results[1] || 0;
}
$(document).ready(function(){
	$("#search_bar").focus();
	key = $.urlParam('key');
   	$("#search_bar").val(key);
	$('#search').trigger('click');
});
$("#all").on('click',function(){
	//alert(key);
	//$(this).addClass('is-active');
	var id = "all";
	$.ajax({
        url: "ajax/update.php",
        method: "post",
        data: '&id='+id+'&key='+key,
        dataType: 'html',
        success: function (data) {
           //alert(data);
           $(".page-content").html(data);
        }
    });
});

$("#images").on('click',function(){
	//alert(1);
	//$(this).addClass('is-active');
	var id = "images";
	$.ajax({
        url: "ajax/update.php",
        method: "post",
        data: '&id='+id+'&key='+key,
        dataType: 'html',
        success: function (data) {
          // alert(data);
          	$(".page-content").html(data);
        }
    });
});
$("#pdf").on('click',function(){
	//alert(1);
	//$(this).addClass('is-active');
	var id = "pdfs";
	$.ajax({
        url: "ajax/update.php",
        method: "post",
        data: '&id='+id+'&key='+key,
        dataType: 'html',
        success: function (data) {
          // alert(data);
          	$(".page-content").html(data);
        }
    });
});
$("#txt").on('click',function(){
	//alert(1);
	//$(this).addClass('is-active');
	var id = "text";
	$.ajax({
        url: "ajax/update.php",
        method: "post",
        data: '&id='+id+'&key='+key,
        dataType: 'html',
        success: function (data) {
          // alert(data);
          	$(".page-content").html(data);
        }
    });
});
$("#ppts").on('click',function(){
	//alert(1);
	//$(this).addClass('is-active');
	var id = "ppts";
	$.ajax({
        url: "ajax/update.php",
        method: "post",
        data: '&id='+id+'&key='+key,
        dataType: 'html',
        success: function (data) {
          // alert(data);
          	$(".page-content").html(data);
        }
    });
});

$("#search").on('click',function(event){
	event.preventDefault();
	key = $("#search_bar").val();
  $('#search_result').html('');
	var curr = $("a").filter(".is-active").attr("id");
	$('#'+curr).trigger('click');
});


$(document).on('click', ".download", function() {
    var id = $(this).attr('id');
  $.ajax({
        url: "ajax/updateCount.php",
        method: "post",
        data: '&id='+id+'&type='+"dwnd",
        success: function (data) {
          var curr = $("a").filter(".is-active").attr("id");
          $('#'+curr).trigger('click');
        }
    });   
});

$(document).on('click', ".view", function() {
    var id = $(this).attr('id');
  $.ajax({
        url: "ajax/updateCount.php",
        method: "post",
        data: '&id='+id+'&type='+"view",
        success: function (data) {
          var curr = $("a").filter(".is-active").attr("id");
          $('#'+curr).trigger('click');
        }
    });   
});

$('#search_bar').keyup(
  function(event){
    var val = $(this).val();
    $.ajax({
      url: "ajax/search.php",
      method: "post",
      data: '&val='+val,
      dataType: 'html',
      success: function(response){
          $('#search_result').html(response);
      },
      error : function(jqXHR,textStatus,errorThrown){
            console.log(textStatus,errorThrown);
      }
    });
});
$('#search_bar').focusout(function(){
  var val = $(this).val();
  if(val == '')
  {
    $('#search_result').html('');
  }
});



