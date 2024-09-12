// Get the modal
var modal_kgwd2 = document.getElementById("myModal-kawagad-2");

// Get the button that opens the modal
var btn_kgwd2 = document.getElementById("kagawad2-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-kagawad-2")[0];

// When the user clicks the button, open the modal 
btn_kgwd2.onclick = function() {
  modal_kgwd2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal_kgwd2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal_kgwd2) {
    modal_kgwd2.style.display = "none";
  }
}