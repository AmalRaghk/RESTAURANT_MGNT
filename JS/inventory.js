 var al=0;
localStorage.setItem("al",al);

function add() {
  
  al++;
  console.log(al)  
  localStorage.setItem("al", al);
  return al;
}	
function cancel() {
	localStorage.setItem("al", al);
    if(al>0)  
	al--;
	else
	alert ("empty")
	console.log(al) 
	return al; 
 
  }	
 
