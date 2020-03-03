var count = 0;

window.addEventListener("wheel", event => {
	
    const delta = Math.sign(event.deltaY);
	console.info(delta);
	
	if(delta == 1) {
		add();
	} else if (delta == -1) {
		remove();
	}

	console.log("Test: " + count);
	
});

function add() {
	//document.getElementById("idDummy1").style.display = "none";
	/*var test = document.getElementById('idMyImageName');
	var cln = test.cloneNode(true);
	document.body.appendChild(cln); 
	*/
	document.getElementById("idMyImageName2").style.display = "flex";
	document.getElementById("idMyImageName3").style.display = "flex";
}


function remove() {
	//document.getElementById("idDummy1").style.display = "flex";
	/*var test = document.getElementById('idMyImageName');
	var cln = test.cloneNode(true);
	document.body.appendChild(cln); 
	*/
	document.getElementById("idMyImageName2").style.display = "none";
}