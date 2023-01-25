const form = document.querySelector(".typing-area"),
inputField = form.querySelector(".input-filed"),
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chat-box");

form.onsubmit = (e)=>{
    e.preventDefault(); // preventing form from submitting
}

sendBtn.onclick = ()=>{ 
        //Ajax code here
        let xhr = new XMLHttpRequest(); //creating XML object
        xhr.open("POST", "../php/insert-chat.php", true );
        xhr.onload = ()=>{
            if(xhr.readyState === XMLHttpRequest.DONE){
                if(xhr.status === 200){
                    inputField.value = "";//once message is inserted into the database then leave blank the inputfiled
                }
            }
        }
        //we have to send the form data through ajax to php
        let formData = new FormData(form); //creating new form data object
        xhr.send(formData);//sending the form data to php
    }
    
    setInterval(() => {
        //Ajax code here
        let xhr = new XMLHttpRequest(); //creating XML object
        xhr.open("POST", "../php/getChat.php ", true );
        xhr.onload = ()=>{
            if(xhr.readyState === XMLHttpRequest.DONE){
                if(xhr.status === 200){
                    let data = xhr.response;
                    chatBox.innerHTML = data;
                }
            }
        }
        //we have to send the form data through ajax to php
        let formData = new FormData(form); //creating new form data object
        xhr.send(formData);//sending the form data to php
   }, 500);//this function will run frequently after 500ms