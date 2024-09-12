// Get the modal
var secretary = document.getElementById("myModal-secretary");

// Get the button that opens the modal
var secretary_btn = document.getElementById("secretary-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-secretary")[0];

// When the user clicks the button, open the modal 
secretary_btn.onclick = function() {
  secretary.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  secretary.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == secretary) {
    secretary.style.display = "none";
  }
}