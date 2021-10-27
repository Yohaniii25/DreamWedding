var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function stickyNavbar() {
	if (window.pageYOffset >= sticky) {
		navbar.classList.add("sticky");
	} else {
		navbar.classList.remove("sticky");
	}

	console.log("hi");
}

function openForm() {
	document.getElementById("myForm").style.display = "block";
}

function closeForm() {
	document.getElementById("myForm").style.display = "none";
}

//Get the button:
mybutton = document.getElementById("topBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
	scrollFunction();
	stickyNavbar();
};

function scrollFunction() {
	if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 20) {
		mybutton.style.display = "block";
	} else {
		mybutton.style.display = "none";
	}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
	document.body.scrollTop = 0; // For Safari
	document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
