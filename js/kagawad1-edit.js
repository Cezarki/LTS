// Get the modal
var modal_kgwd1_edit_ = document.getElementById("myModal-kagawad111-edit");

// Get the button that opens the modal
var btn_kgwd1_edit_ = document.getElementById("kagawad-edit111-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-kagawad-edit111")[0];

// When the user clicks the button, open the modal 
btn_kgwd1_edit_.onclick = function() {
  modal_kgwd1_edit_.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal_kgwd1_edit_.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal_kgwd1_edit_) {
    modal_kgwd1_edit_.style.display = "none";
  }
}