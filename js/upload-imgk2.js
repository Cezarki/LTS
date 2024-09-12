var img_modalk2 = document.getElementById('upload-modalk2');

var img_modal_btnk2 = document.getElementById('k2-button');

var span = document.getElementsByClassName('close-upload-modalk2')[0];

img_modal_btnk2.onclick = function(){
    img_modalk2.style.display = "block";
};

span.onclick = function(){
    img_modalk2.style.display = "none";
};
