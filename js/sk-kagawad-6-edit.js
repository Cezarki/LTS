// Get the modal
var sk_kgwd6_edit = document.getElementById("myModal-sk-kagawad-b6-edit");

// Get the button that opens the modal
var sk_kgwd6_btn_edit = document.getElementById("sk-kgwd6-edit");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-sk-kagawad-b6-edit")[0];

// When the user clicks the button, open the modal 
sk_kgwd6_btn_edit.onclick = function() {
  sk_kgwd6_edit.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  sk_kgwd6_edit.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == sk_kgwd6_edit) {
    sk_kgwd6_edit.style.display = "none";
  }
}