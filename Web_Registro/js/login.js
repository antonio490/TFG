

var date = new Date();
document.getElementById("fecha").innerHTML = date.toDateString();


document.getElementById('btn1').style.visibility = "hidden";

function checkform(){
	
	var f = document.forms["form1"].elements;
	var cansubmit = true;
	
	for(var i = 0; i < f.length; i++){
		if(f[i].value.length == 0) 
			cansubmit == false;
		if(cansubmit)
			document.getElementById('btn1').style.visibility = "hidden";
		
		else
			document.getElementById('btn1').innerHTML = "<input id='btn1' type='submit' value='Entrar'/>"
		}
	}
}


