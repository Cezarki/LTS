// Get the modal
var modal_kgwd2_edit = document.getElementById("myModal-kagawad2-edit");

// Get the button that opens the modal
var btn_kgwd2_edit = document.getElementById("kagawad2-edit-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-kagawad2-edit")[0];

// When the user clicks the button, open the modal 
btn_kgwd2_edit.onclick = function() {
  modal_kgwd2_edit.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal_kgwd2_edit.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal_kgwd2_edit) {
    modal_kgwd2_edit.style.display = "none";
  }
}