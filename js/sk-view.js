// Get the modal
var sk_chairman_view = document.getElementById("myModal-Sk-view");

// Get the button that opens the modal
var sk_chairman_btn_view = document.getElementById("sk-btn-view");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-Sk-view")[0];

// When the user clicks the button, open the modal 
sk_chairman_btn_view.onclick = function() {
  sk_chairman_view.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  sk_chairman_view.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == sk_chairman_view) {
    sk_chairman_view.style.display = "none";
  }
}