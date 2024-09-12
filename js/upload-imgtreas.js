var img_modaltrea = document.getElementById('upload-modalt');

var img_modal_btntrea = document.getElementById('t1-button');

var span = document.getElementsByClassName('close-upload-modalt')[0];

img_modal_btntrea.onclick = function(){
    img_modaltrea.style.display = "block";
};

span.onclick = function(){
    img_modaltrea.style.display = "none";
};
