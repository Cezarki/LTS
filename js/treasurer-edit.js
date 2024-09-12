// Get the modal
var treasurer_edit = document.getElementById("myModal-treasurer-a1-edit");

// Get the button that opens the modal
var treasurer_btn_edit = document.getElementById("treasurer-btn-edit");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-treasurer-a1-edit")[0];

// When the user clicks the button, open the modal 
treasurer_btn_edit.onclick = function() {
  treasurer_edit.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  treasurer_edit.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == treasurer_edit) {
    treasurer_edit.style.display = "none";
  }
}