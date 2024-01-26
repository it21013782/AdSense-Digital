function loadData(name)
{
	if ( name == "btn1")
	document.getElementById("para"). innerHTML= ""The history of iPhone began with a request from Apple Inc. CEO Steve Jobs to the company engineers, asking them to investigate the use of touchscreen devices and tablet computers (which later came to fruition with the iPad).[1][2][3][4] Many have noted the device similarities to Apple previous touch-screen portable device, the Newton MessagePad.[5][6][7][8] Like the MessagePad, the iPhone is nearly all screen. Its form factor is credited to Apple Chief Design Officer, Jonathan Ive.[3][9] The iPhone beta however was created in 2004 to test its ability towards commands of the Apple team and was called the first iPhone ever but was never released to the public so it was not considered as the main first iPhone"
			
}

funtion checkpassword()
{
	if (document.getElementById("pwd").value != document.getElementById ("reenterpwd").value)
	{
		alert("Password mismatch");
		return false;
	}
	else
	{
		alert("Success!");
		return true;
	}
		
} 

function enableButton(){
	if(document.getElementById("checkbox").checked
	{
		document.getElementById("submitbtn").disabled = "false";
	}
	else
	{
		document.getElementById("submitbtn").disabled = "true";
	}
	
//slideshow
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

/* header */

window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

/* Set the width of the side navigation to 250px */
function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}