// Get the modal
var modal_kgwd1 = document.getElementById("myModal-kawagad-1");

// Get the button that opens the modal
var btn_kgwd1 = document.getElementById("kagawad-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-kagawad-1")[0];

// When the user clicks the button, open the modal 
btn_kgwd1.onclick = function() {
  modal_kgwd1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal_kgwd1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal_kgwd1) {
    modal_kgwd1.style.display = "none";
  }
}