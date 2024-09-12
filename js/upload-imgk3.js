var img_modalk3 = document.getElementById('upload-modalk3');

var img_modal_btnk3 = document.getElementById('k3-button');

var span = document.getElementsByClassName('close-upload-modalk3')[0];

img_modal_btnk3.onclick = function(){
    img_modalk3.style.display = "block";
};

span.onclick = function(){
    img_modalk3.style.display = "none";
};
