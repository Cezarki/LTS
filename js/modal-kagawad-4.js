// Get the modal
var modal_kgwd4 = document.getElementById("myModal-kawagad-4");

// Get the button that opens the modal
var btn_kgwd4 = document.getElementById("kagawad4-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-kagawad-4")[0];

// When the user clicks the button, open the modal 
btn_kgwd4.onclick = function() {
  modal_kgwd4.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal_kgwd4.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal_kgwd4) {
    modal_kgwd4.style.display = "none";
  }
}