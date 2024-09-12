            var modal = document.getElementById('modal');

              var btn = document.getElementById('create-btn');

              var span = document.getElementById('close');

              btn.onclick = function shows(){
                  modal.style.display = 'block';
              }

              span.onclick = function closes(){
                  modal.style.display = 'none';
              }

              window.onclick = function(event){
                  if(event.target == modal){
                    modal.style.display = 'none';
                  }
              }