var get_modal_upload = document.getElementById('upload-modal');

var get_modal_upload_btn = document.getElementById('upload');

var span = document.getElementsByClassName('close-upload-modal')[0];

get_modal_upload_btn.onclick = function(){
    get_modal_upload.style.display = "block";
};

span.onclick = function(){
    get_modal_upload.style.display = "none";
};
