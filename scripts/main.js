
function delete_commercials(){
    var elem = document.getElementById("top_10");
    elem.style.display = "none";
    document.getElementById("top_10").style.display = "none";
    
    var elem2 = document.getElementsByClassName("cbalink");
    elem2[0].style.display = "none";
    document.getElementsByClassName("cbalink")[0].style.display = "none";
}


setTimeout(delete_commercials(), 2000);

