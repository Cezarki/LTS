var img_modalk6 = document.getElementById('upload-modalk6');

var img_modal_btnk6 = document.getElementById('k6-button');

var span = document.getElementsByClassName('close-upload-modalk6')[0];

img_modal_btnk6.onclick = function(){
    img_modalk6.style.display = "block";
};

span.onclick = function(){
    img_modalk6.style.display = "none";
};
