// JavaScript Document
$(document).ready(function(){
	$('.accordian ul li:nth-child(even)').hide();
	$('#acc1c').show();
	var initial = true;
	var curr = "acc1";
	$('.accordian ul li').click(function(){
		var id = $(this).attr('id');
		if((id != curr)&&(id != "acc1" || initial == false)&& (id != "acc1c" && id != "acc2c" && id != "acc3c" && id != "acc4c" && id != "acc5c" && id != "acc6c"))
			$('.accordian ul li:nth-child(even)').slideUp();			
		$('#'+id+'c').slideDown();
		if(id != "acc1")
		initial = false;
		curr = id;
	});
	
	
	//Date picker start
	$('#inputDate').DatePicker({
		format:'m/d/Y',
		date: $('#inputDate').val(),
		current: $('#inputDate').val(),
		starts: 1,
		position: 'r',
		onBeforeShow: function(){
			$('#inputDate').DatePickerSetDate($('#inputDate').val(), true);
		},
		onChange: function(formated, dates){
			$('#inputDate').val(formated);
				$('#inputDate').DatePickerHide();
		}
	});
	//Date picker Ends
	
});