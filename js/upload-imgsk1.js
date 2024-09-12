var img_modalSk1 = document.getElementById('upload-modalsk1');

var img_modal_btnSk1 = document.getElementById('sk1');

var span = document.getElementsByClassName('close-upload-modalsk1')[0];

img_modal_btnSk1.onclick = function(){
    img_modalSk1.style.display = "block";
};

span.onclick = function(){
    img_modalSk1.style.display = "none";
};
