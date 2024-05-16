const searchBar = document.querySelector(".users .search input"),
 searchBtn = document.querySelector(".users .search button"),
 userList = document.querySelector(".users .users-list");

 searchBtn.onclick = () => {
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle("active");
    searchBar.value = "";
 }
 searchBar.onkeyup = () => {
   let searchTerm = searchBar.value;
   if(searchTerm != ""){
      searchBar.classList.add("active");
   }else{
      searchBar.classList.remove("active");
   }
   //Ajax code
   let xhr = new XMLHttpRequest(); // creates XML object
   xhr.open("POST", "php/search.php", true);
   xhr.onload = () => {
       if(xhr.readyState === XMLHttpRequest.DONE){
           if(xhr.status === 200){
               let data = xhr.response;
               userList.innerHTML = data;
           }
       }
   }
   xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   xhr.send("searchTerm=" + searchTerm); //send form data to php
 }
 
 setInterval(() => {
   //Ajax code
   let xhr = new XMLHttpRequest(); // creates XML object
   xhr.open("GET", "php/users.php");
   xhr.onload = () => {
       if(xhr.readyState === XMLHttpRequest.DONE){
           if(xhr.status === 200){
               let data = xhr.response;
               if(!searchBar.classList.contains("active")){
                  userList.innerHTML = data;
               }
           }
       }
   }
   xhr.send(); //send form data to php
 }, 500);