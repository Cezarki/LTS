// Get the modal
var sk_kgwd1_view = document.getElementById("myModal-Sk-kagawad1-view");

// Get the button that opens the modal
var sk_kgwd1_btn_view = document.getElementById("sk-kgwd1-view");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-Sk-kagawad1-view")[0];

// When the user clicks the button, open the modal 
sk_kgwd1_btn_view.onclick = function() {
  sk_kgwd1_view.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  sk_kgwd1_view.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == sk_kgwd1_view) {
    sk_kgwd1_view.style.display = "none";
  }
}