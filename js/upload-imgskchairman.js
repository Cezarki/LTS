var img_modalSkc = document.getElementById('upload-modalskchaiman');

var img_modal_btnSkc = document.getElementById('sk-c-btn');

var span = document.getElementsByClassName('close-upload-modalskchaiman')[0];

img_modal_btnSkc.onclick = function(){
    img_modalSkc.style.display = "block";
};

span.onclick = function(){
    img_modalSkc.style.display = "none";
};
