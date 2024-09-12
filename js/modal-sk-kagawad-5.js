// Get the modal
var sk_kgwd5 = document.getElementById("myModal-sk-kagawad-b5");

// Get the button that opens the modal
var sk_kgwd5_btn = document.getElementById("sk-kgwd5-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-sk-kagawad-b5")[0];

// When the user clicks the button, open the modal 
sk_kgwd5_btn.onclick = function() {
  sk_kgwd5.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  sk_kgwd5.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == sk_kgwd5) {
    sk_kgwd5.style.display = "none";
  }
}