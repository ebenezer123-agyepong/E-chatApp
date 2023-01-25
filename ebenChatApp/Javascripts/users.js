const searchBar = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search button"),
usersList = document.querySelector(".users .user-list");

searchBtn.onclick =()=>{
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle("active");
}

setInterval(() => {
     //Ajax code here
     let xhr = new XMLHttpRequest(); //creating XML object
     xhr.open("GET", "../php/users.php ", true );
     xhr.onload = ()=>{
         if(xhr.readyState === XMLHttpRequest.DONE){
             if(xhr.status === 200){
                 let data = xhr.response;
                 usersList.innerHTML = data;
             }
         }
     }
     xhr.send();
}, 500);//this function will run frequently after 500ms