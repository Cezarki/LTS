var img_modalSk2 = document.getElementById('upload-modalsk2');

var img_modal_btnSk2 = document.getElementById('sk2');

var span = document.getElementsByClassName('close-upload-modalsk2')[0];

img_modal_btnSk2.onclick = function(){
    img_modalSk2.style.display = "block";
};

span.onclick = function(){
    img_modalSk2.style.display = "none";
};
