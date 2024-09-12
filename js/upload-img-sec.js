var img_modalsec = document.getElementById('upload-modals');

var img_modal_btnsec = document.getElementById('s1-button');

var span = document.getElementsByClassName('close-upload-modals')[0];

img_modal_btnsec.onclick = function(){
    img_modalsec.style.display = "block";
};

span.onclick = function(){
    img_modalsec.style.display = "none";
};
