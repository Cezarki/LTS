var img_modalSk7 = document.getElementById('upload-modalsk7');

var img_modal_btnSk7 = document.getElementById('sk7');

var span = document.getElementsByClassName('close-upload-modalsk7')[0];

img_modal_btnSk7.onclick = function(){
    img_modalSk7.style.display = "block";
};

span.onclick = function(){
    img_modalSk7.style.display = "none";
};
