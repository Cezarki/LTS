// Get the modal
var sk_chairman = document.getElementById("myModal-sk-chairman");

// Get the button that opens the modal
var sk_chairman_btn = document.getElementById("sk-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-sk-chairman")[0];

// When the user clicks the button, open the modal 
sk_chairman_btn.onclick = function() {
  sk_chairman.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  sk_chairman.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == sk_chairman) {
    sk_chairman.style.display = "none";
  }
}