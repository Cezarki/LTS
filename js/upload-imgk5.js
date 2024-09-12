var img_modalk5 = document.getElementById('upload-modalk5');

var img_modal_btnk5 = document.getElementById('k5-button');

var span = document.getElementsByClassName('close-upload-modalk5')[0];

img_modal_btnk5.onclick = function(){
    img_modalk5.style.display = "block";
};

span.onclick = function(){
    img_modalk5.style.display = "none";
};
