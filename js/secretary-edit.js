// Get the modal
var secretary_edit = document.getElementById("myModal-secretary-a1-edit");

// Get the button that opens the modal
var secretary_btn_edit = document.getElementById("secretary-btn-edit");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-secretary-a1-edit")[0];

// When the user clicks the button, open the modal 
secretary_btn_edit.onclick = function() {
  secretary_edit.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  secretary_edit.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == secretary_edit) {
    secretary_edit.style.display = "none";
  }
}