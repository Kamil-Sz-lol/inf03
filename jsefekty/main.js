function kolor(){
    document.getElementById('obraz2').style.filter = "grayscale(0%)";
}
function czarnobialy(){
    document.getElementById('obraz2').style.filter = "grayscale(100%)";
}
function przezro(){
    let x = document.getElementById('suwak1').value;
    document.getElementById('obraz3').style.filter = "opacity("+x+"%)";
}
function jasnosc(){
    let y = document.getElementById('suwak2').value;
    document.getElementById('obraz4').style.filter = "brightness("+y+"%)";
}
function pszczola(){
    let sepia = document.getElementById('sepia').checked;
    let obraz = document.getElementById('obraz1');
    let blur = document.getElementById('blur').checked;
    let negatyw = document.getElementById('negatyw').checked;

    if(sepia==true){
        obraz.style.filter = "sepia(100%)"
    }
    if(blur==true){
        obraz.style.filter = "blur(5px)"
    }
    if(negatyw==true){
        obraz.style.filter = "invert(100%)"
    }
}