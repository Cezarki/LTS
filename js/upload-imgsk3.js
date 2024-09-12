var img_modalSk3 = document.getElementById('upload-modalsk3');

var img_modal_btnSk3 = document.getElementById('sk3');

var span = document.getElementsByClassName('close-upload-modalsk3')[0];

img_modal_btnSk3.onclick = function(){
    img_modalSk3.style.display = "block";
};

span.onclick = function(){
    img_modalSk3.style.display = "none";
};
