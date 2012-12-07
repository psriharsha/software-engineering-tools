// JavaScript Document
$(document).ready(function(){
	$('.accordian ul li:nth-child(even)').hide();
	$('.accTable').hide();
	$('#acc1c').show();
	getdata('acc1');
	var initial = true;
	var curr = "acc1";

	
		/*var data = "{add1:'"+$('#add1').val()+"',";
		data += "add2:'"+$('#add2').val()+"',";
		data += "town:'"+$('#town').val()+"',";
		data += "postcode:'"+$('#postcode').val()+"',";
		data += "female:'"+$('#female').val()+"',";
		data += "perurl:'"+$('#perurl').val()+"',";
		data += "authwork:'"+$('#authwork').val()+"',";
		data += "noofgcse:"+(($('#noofgcse').val())+1)+",";
		data += "gcseeng:"+$('#gcseeng').val()+",";
		data += "gcsemath:"+$('#gcsemath').val()+",";
		data += "stusta:'"+$('#stusta').val()+"'}";
		doit(data);
	});
	*/
	
	
	$('#menu ul li').click(function(){
		$('#menu ul li').removeClass("selected");
		$(this).addClass("selected");
	});
	
	$('.accordian ul li').click(function(){
		var id = $(this).attr('id');
		if((id != curr)&&(id != "acc1" || initial == false)&& (id != "acc1c" && id != "acc2c" && id != "acc3c" && id != "acc4c" && id != "acc5c" && id != "acc6c"&& id != "acc7c"))
		{
			$('.accordian ul li:nth-child(even)').slideUp(1000);	
		}
		getdata(id);
		$('#'+id+'c').slideDown(1000);
		if(id != "acc1")
		initial = false;
		curr = id;
	});
	
	$('#edit2 a').click(function(){
		$('#contactTable').slideDown(1000);
	});
	
	
	
});