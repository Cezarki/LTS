// Get the modal
var sk_kgwd7_view = document.getElementById("myModal-Sk-kagawad-b7-view");

// Get the button that opens the modal
var sk_kgwd7_btn_view = document.getElementById("sk-kgwd7-view");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-Sk-kagawad-b7-view")[0];

// When the user clicks the button, open the modal 
sk_kgwd7_btn_view.onclick = function() {
  sk_kgwd7_view.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  sk_kgwd7_view.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == sk_kgwd7_view) {
    sk_kgwd7_view .style.display = "none";
  }
}