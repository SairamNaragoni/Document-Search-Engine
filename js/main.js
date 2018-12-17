$("#IndexSearch").on('click',function(event){
	event.preventDefault();
	key =  $("#search_bar").val();
	if(key!='')
	{
		window.location = "http://localhost/DSE/main.php?key="+key;	
	}
	
});