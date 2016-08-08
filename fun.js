function myFunction(){
	for (var i = 0; i <= document.forms["frm"].length; i++){
		var v =  document.forms["frm"].elements[i].value ;
                var nm = document.forms["frm"].elements[i].name
		
		if(v == null || v==""){
			
			if( nm == "f_name"){
				 nm=nm.replace("f_name","First Name");
			}	
			else if( nm == "l_name"){
				 nm=nm.replace("l_name","Last Name");
			}
			else if(nm=="email"){
				 nm=nm.replace("email","Email Id");
			}
			else if(nm=="pid"){
				 nm=nm.replace("pid","Person Id");
			}
				alert("Enter the value for "+ nm);
				return false;
		}
		else if(document.forms["frm"].elements[i].name=="email"){
			if(v.indexOf("@") ==-1 || v.indexOf(".")==-1){
				alert("Invalid Email ID");
				return false;
			}
		}
	}
}
