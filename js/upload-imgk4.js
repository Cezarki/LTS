var img_modalk4 = document.getElementById('upload-modalk4');

var img_modal_btnk4 = document.getElementById('k4-button');

var span = document.getElementsByClassName('close-upload-modalk4')[0];

img_modal_btnk4.onclick = function(){
    img_modalk4.style.display = "block";
};

span.onclick = function(){
    img_modalk4.style.display = "none";
};
