/*
 javascript for kleeja 
 www.kleeja.com
*/

	var totalupload_num=number_of_uploads-1;
	
	//get element by id name
	function $(id)
	{
		if(document.all){
         	return eval("document.all['" + id + "']");
    	}
		else{
			return document.getElementById(id);
		}
	}
	
	
	//new field
	function plus (type)
	{
		var value = (type==1) ?  $("upload_num") : $("upload_f_num");
		var num = number_of_uploads;
		if (value.value < num )
		{
			value.value++;
			eval('var s = "file[' + (value.value) + ']";');
			$(s).style.display = '';
		}
		else
		{
			alert(LANG_MORE_F_FILES);
		}
	}
	
	//remove field
	function minus (type)
	{
		var value = (type==1) ?  $("upload_num") : $("upload_f_num");
		var num = number_of_uploads;
		var num_l = num-1;
		if (value.value != 1 )
		{
			value.value--;
			eval('var s = "file[' + (value.value) + ']";');
			$(s).style.display = 'none';
		}
	}
	
	//submit
	function form_submit() 
	{
		var load = $('loadbox');
		var uploader = $("uploader");
		load.style.display = "inline";
		uploader.style.display = "none";
		document.uploader.submit();
	}
	
	//acceept terms of uploads
	function accept_terms (sub,ch)
	{
		var submit = $(sub);
		var checker = $(ch);
		submit.disabled = ( checker.checked ) ?  "" : "disabled";
	}
	
	//show or hide some fields
	function showhide()
	{
		var txt = $("texttype");
		var fle = $("filetype");

		if (txt.style.display == 'none')
		{
			txt.style.display = 'block';
			fle.style.display = 'none';
		}
		else
		{
			fle.style.display = 'block';
			txt.style.display = 'none';
		}
	}
