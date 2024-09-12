var modal = document.getElementById('modal');

var btn = document.getElementById('btn');

var span = document.getElementById('close');

btn.onclick = function show(){
    modal.style.display = 'block';
}

span.onclick = function close(){
    modal.style.display = 'none';
}

window.onclick = function(event){
    if(event.target == modal){
        modal.style.display = 'none';
    }
}