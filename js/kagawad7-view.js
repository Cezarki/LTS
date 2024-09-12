// Get the modal
var modal_kgwd7_view = document.getElementById("myModal-kagawad7a-view");

// Get the button that opens the modal
var btn_kgwd7_view = document.getElementById("kagawad7-btn-view");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-kagawad7a-view")[0];

// When the user clicks the button, open the modal 
btn_kgwd7_view.onclick = function() {
  modal_kgwd7_view.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal_kgwd7_view.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal_kgwd7_view) {
    modal_kgwd7_view.style.display = "none";
  }
}