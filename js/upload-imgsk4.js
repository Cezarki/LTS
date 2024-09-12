var img_modalSk4 = document.getElementById('upload-modalsk4');

var img_modal_btnSk4 = document.getElementById('sk4');

var span = document.getElementsByClassName('close-upload-modalsk4')[0];

img_modal_btnSk4.onclick = function(){
    img_modalSk4.style.display = "block";
};

span.onclick = function(){
    img_modalSk4.style.display = "none";
};
