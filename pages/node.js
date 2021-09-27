function access(){
	let name=document.getElementById("name").value;
	let password=document.getElementById("pass").value;	
    if((name=="stud032" && password=="nambi")||(name=="S1/stud031" && password=="kemigisha")||
	(name=="stud033" && password=="charles")||(name=="stud034" && password=="geofrey")||
	(name=="stud035" && password=="blessing")||(name=="stud036" && password=="kayongo")||
	(name=="stud037" && password=="fahad")||(name=="stud038" && password=="flavia")||
	(name=="stud039" && password=="henry")||(name=="stud040" && password=="benita")||
	(name=="stud041" && password=="jamira")){
	window.open("home.html");
	}else if(name=="trin" && password=="holy5"){
        window.open("home.html");
    }
	else{
    alert("Wrong Unique User ID and password combinations");
}
}
