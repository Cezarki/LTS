// Get the modal
var sk_kgwd4 = document.getElementById("myModal-sk-kagawad4");

// Get the button that opens the modal
var sk_kgwd4_btn = document.getElementById("sk-kgwd4-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-sk-kagawad4")[0];

// When the user clicks the button, open the modal 
sk_kgwd4_btn.onclick = function() {
  sk_kgwd4.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  sk_kgwd4.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == sk_kgwd4) {
    sk_kgwd4.style.display = "none";
  }
}