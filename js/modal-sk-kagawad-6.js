// Get the modal
var sk_kgwd6 = document.getElementById("myModal-sk-kagawad-b6");

// Get the button that opens the modal
var sk_kgwd6_btn = document.getElementById("sk-kgwd6-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-sk-kagawad-b6")[0];

// When the user clicks the button, open the modal 
sk_kgwd6_btn.onclick = function() {
  sk_kgwd6.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  sk_kgwd6.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == sk_kgwd6) {
    sk_kgwd6.style.display = "none";
  }
}