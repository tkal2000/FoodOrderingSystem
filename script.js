function getDeliver(d_email)
{
	const xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange= function()
	{
        document.getElementById("dname").innerHTML= xhttp.responseText;
	}
	xhttp.open("POST","getDeliveremail.php",true);
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhttp.send("d="+d_email);	
}