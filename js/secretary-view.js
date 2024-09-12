// Get the modal
var secretary_view = document.getElementById("myModal-secretary-view");

// Get the button that opens the modal
var secretary_btn_view = document.getElementById("secretary-btn-view");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-secretary-view")[0];

// When the user clicks the button, open the modal 
secretary_btn_view.onclick = function() {
  secretary_view.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  secretary_view.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == secretary_view) {
    secretary_view.style.display = "none";
  }
}