// Get the modal
var treasurer_view = document.getElementById("myModal-treasurer-view");

// Get the button that opens the modal
var treasurer_btn_view = document.getElementById("treasurer-btn-view");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-treasurer-view")[0];

// When the user clicks the button, open the modal 
treasurer_btn_view.onclick = function() {
  treasurer_view.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  treasurer_view.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == treasurer_view) {
    treasurer_view.style.display = "none";
  }
}