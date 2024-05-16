const form = document.querySelector(".login form"),
joinBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-txt");


form.onsubmit = (e) => {
    e.preventDefault(); // preventing form from submiting  
    
}

joinBtn.onclick = () => {
    //Ajax code
    let xhr = new XMLHttpRequest(); // creates XML object
    xhr.open("POST", "php/login.php");
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(data == "success"){
                    location.href = "./users.php";
                }else{
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
            }
        }
    }
    // we send the form data through ajax to php
    let formData = new FormData(form); //creates new formdata object
    xhr.send(formData); //send form data to php
}