// Get the modal
var treasurer = document.getElementById("myModal-treasurer");

// Get the button that opens the modal
var treasurer_btn = document.getElementById("treasurer-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-treasurer")[0];

// When the user clicks the button, open the modal 
treasurer_btn.onclick = function() {
  treasurer.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  treasurer.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == treasurer) {
    treasurer.style.display = "none";
  }
}