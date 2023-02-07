function menuAnimation(){
    var element = document.getElementById("slideNav");
    var element1 = document.getElementById("admin-right");
    if(element && element1){
        element.classList.toggle("navSlide");
        element1.classList.toggle("navSlide1");
    }
}