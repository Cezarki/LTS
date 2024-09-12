// Get the modal
var sk_kgwd7 = document.getElementById("myModal-sk-kagawad-b7");

// Get the button that opens the modal
var sk_kgwd7_btn = document.getElementById("sk-kgwd7-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-sk-kagawad-b7")[0];

// When the user clicks the button, open the modal 
sk_kgwd7_btn.onclick = function() {
  sk_kgwd7.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  sk_kgwd7.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == sk_kgwd7) {
    sk_kgwd7.style.display = "none";
  }
}