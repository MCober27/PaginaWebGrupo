
function iluminar_actual(iluminar){
    elemento=document.getElementsByTagName("LI");
    for(var i=0;i<elemento.length-1;i++){
        if(i==iluminar){
            elemento[i].setAttribute("class","active");
        }
    }
}
