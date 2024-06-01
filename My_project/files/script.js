$(document).ready(function ()  
{
//select the close by class and apply a click even listener
  $(".close").on("click", function () 
	{
		//select the modal element by id , and apply display none when close is clicked
		//this will close the modal on click
		$("#modal").css("display", "none")
	});
  
});