// JavaScript Document
$(document).ready(function(){
	$('.accordian ul li:nth-child(even)').hide();
	$('#acc1c').show();
	var initial = true;
	$('.accordian ul li').click(function(){
		var id = $(this).attr('id');
		if(id != "acc1" || initial == false)
			$('.accordian ul li:nth-child(even)').slideUp();			
		$('#'+id+'c').slideDown();
		if(id != "acc1")
		initial = false;
	});
});