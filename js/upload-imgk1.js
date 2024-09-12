var img_modal = document.getElementById('upload-modalk1');

var img_modal_btn = document.getElementById('k1-button');

var span = document.getElementsByClassName('close-upload-modalk1')[0];

img_modal_btn.onclick = function(){
    img_modal.style.display = "block";
};

span.onclick = function(){
    img_modal.style.display = "none";
};
