function validPassword(){
	if(document.getElementById("pwd").value != document.getElementById("rpwd").value){
		alert("Passwords are mismatched!!");
		return false;
			
		}
		else{
			alert("Successfully registered!!");
			return true;
		}

}

function enableButton(){
	if(document.getElementById("policy").checked){
		document.getElementById("btnl").disabled=false;
	}
	else{
		document.getElementById("btnl").disabled=true;
	}
	
}

function myFunction(imgs) {
  // Get the expanded image
  var expandImg = document.getElementById("expandedImg");
  // Get the img text
  var imgText = document.getElementById("imgtext");
  // Use the same src in the expanded image as the image being clicked on from the grid
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  // Show the container element
  expandImg.parentElement.style.display = "block";
}


// updated profile delete and update
function enableButton()
{	
	if(document.getElementById("policy").checked)
	{
		document.getElementById("btnl").disabled = false;
	}
	else
	{
		document.getElementById("btnl2").disabled = true;
      } 
}