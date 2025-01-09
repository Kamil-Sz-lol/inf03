function aktywacja(arg){
    document.getElementById("1").style.display = "none";
    document.getElementById("2").style.display = "none";
    document.getElementById("3").style.display = "none";
   
    document.getElementById(arg).style.display = "block";
}
let dl = 4;
function zwiekszpasek(){
    if(dl<100){
        dl = dl + 12
    document.getElementById('pasekpost').style.width = dl + '%';
    }
}