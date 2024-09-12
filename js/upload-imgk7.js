var img_modalk7 = document.getElementById('upload-modalk7');

var img_modal_btnk7 = document.getElementById('k7-button');

var span = document.getElementsByClassName('close-upload-modalk7')[0];

img_modal_btnk7.onclick = function(){
    img_modalk7.style.display = "block";
};

span.onclick = function(){
    img_modalk7.style.display = "none";
};
