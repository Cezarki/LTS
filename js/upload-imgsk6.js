var img_modalSk6 = document.getElementById('upload-modalsk6');

var img_modal_btnSk6 = document.getElementById('sk6');

var span = document.getElementsByClassName('close-upload-modalsk6')[0];

img_modal_btnSk6.onclick = function(){
    img_modalSk6.style.display = "block";
};

span.onclick = function(){
    img_modalSk6.style.display = "none";
};
