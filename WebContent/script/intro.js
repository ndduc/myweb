// Initial state
var scrollPos = 0;
// adding scroll event
var count = 1;
window.addEventListener('scroll', function(){
  // detects new state and compares it with the new one
  if ((document.body.getBoundingClientRect()).top > scrollPos) {
	console.log("UP");
	//remove();
  }
		
  else {
	console.log("DOWN");
	/*if(count == 10) {*/
		add();
	/*}*/
	count ++;
  }

  console.log(count);
		
	scrollPos = (document.body.getBoundingClientRect()).top;
});


function add() {
	document.getElementById("idDummy1").style.display = "none";
	/*var test = document.getElementById('idMyImageName');
	var cln = test.cloneNode(true);
	document.body.appendChild(cln); 
	*/
	document.getElementById("idMyImageName2").style.display = "flex";
}


function remove() {
	document.getElementById("idDummy1").style.display = "flex";
	/*var test = document.getElementById('idMyImageName');
	var cln = test.cloneNode(true);
	document.body.appendChild(cln); 
	*/
	document.getElementById("idMyImageName2").style.display = "none";
}