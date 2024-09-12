var img_modalSk5 = document.getElementById('upload-modalsk5');

var img_modal_btnSk5 = document.getElementById('sk5');

var span = document.getElementsByClassName('close-upload-modalsk5')[0];

img_modal_btnSk5.onclick = function(){
    img_modalSk5.style.display = "block";
};

span.onclick = function(){
    img_modalSk5.style.display = "none";
};
