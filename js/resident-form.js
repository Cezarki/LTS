// Get the modal
var modal_view = document.getElementById("resident-form");

// Get the button that opens the modal
var btn_view = document.getElementById("btn-show");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("resident-x-btn")[0];

// When the user clicks the button, open the modal 
btn_view.onclick = function() {
  modal_view.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal_view.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal_view) {
    modal_view.style.display = "none";
  }
}
