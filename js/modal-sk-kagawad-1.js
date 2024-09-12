// Get the modal
var sk_kgwd1 = document.getElementById("myModal-sk-kagawad");

// Get the button that opens the modal
var sk_kgwd1_btn = document.getElementById("sk-kgwd1-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-sk-kagawad1")[0];

// When the user clicks the button, open the modal 
sk_kgwd1_btn.onclick = function() {
  sk_kgwd1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  sk_kgwd1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == sk_kgawd1) {
    sk_kgawd1.style.display = "none";
  }
}