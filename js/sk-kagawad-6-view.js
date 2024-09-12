// Get the modal
var sk_kgwd6_view = document.getElementById("myModal-Sk-kagawad-b6-view");

// Get the button that opens the modal
var sk_kgwd6_btn_view = document.getElementById("sk-kgwd6-view");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-Sk-kagawad-b6-view")[0];

// When the user clicks the button, open the modal 
sk_kgwd6_btn_view.onclick = function() {
  sk_kgwd6_view.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  sk_kgwd6_view.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == sk_kgwd6_view) {
    sk_kgwd6_view .style.display = "none";
  }
}