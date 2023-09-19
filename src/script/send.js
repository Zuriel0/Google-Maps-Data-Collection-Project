function ajax() {
  var req = new XMLHttpRequest();
  req.onreadystatechange = function (){
    if (req.readyState == 4 && req.status == 200) {
      document.getElementById('content').innerHTML = req.responseText;
    }
  }
    req.open('GET', '../views/reviews.php', true);
    req.send();
}

const form = document.querySelector('#formulario'),
sendBtn = form.querySelector('#btn-send-msj'),
inputField = form.querySelector('#msj');

form.onsubmit = (e)=>{
  e.preventDefault();
}

sendBtn.onclick = ()=>{
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../include/send.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            inputField.value = "";
        }
    }
  }
  let formData = new FormData(form);
  xhr.send(formData);
  console.log(formData);
  ajax();
  setTimeout(ajax(), 4500);
}


function buttonComplete(id) {
  let btnId = '#complete_'+id;
  let divId = '#div_'+id;
  const div = document.querySelector(divId),
  btn = div.querySelector(btnId);
  btn.value = id;
  console.log(div);
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "../include/complete.php", true);
  xhr.onload = ()=>{
  if(xhr.readyState === XMLHttpRequest.DONE){
    if(xhr.status === 200){
      //inputField.value = "";
      }
    }
  }
 let formData = new FormData();
 formData.append('buttonCom', id);
 xhr.send(formData);
 ajax();
  setTimeout(ajax(), 500);
}