const form = document.querySelector(".login form"),
continueBtn = form.querySelector(".button input"),
errorTest = form.querySelector(".error_text");

form.onsubmit = (e)=>{
    e.preventDefault(); // preventing form from submitting
}

continueBtn.onclick = ()=>{
    //Ajax code here
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "php/login.php", true );
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
             if(data == "success"){
                   // location.href ="./users.php";
                }else{
                    errorTest.style.display = "block";
                    errorTest.textContent = data;
               }
            }
        }
    }
    //we have to send the form data through ajax to php
    let formData = new FormData(form); //creating new form data object
    xhr.send(formData);//sending the form data to php


}
