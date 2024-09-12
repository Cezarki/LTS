// Get the modal
var sk_kgwd4_edit = document.getElementById("myModal-sk-kagawad-a4-edit");

// Get the button that opens the modal
var sk_kgwd4_btn_edit = document.getElementById("sk-kgwd4-edit");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-sk-kagawad-a4-edit")[0];

// When the user clicks the button, open the modal 
sk_kgwd4_btn_edit.onclick = function() {
  sk_kgwd4_edit.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  sk_kgwd4_edit.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == sk_kgwd4_edit) {
    sk_kgwd4_edit.style.display = "none";
  }
}