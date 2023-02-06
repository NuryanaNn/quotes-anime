window.onload = pilihgambar;

let gambar = new Array("1.png","2.png");
function pilihgambar(){
    let randomNum = Math.floor(Math.random()*gambar.length);
    document.getElementById("thumbImg1").src = gambar[randomNum];
    document.getElementById("thumbImg2").src = gambar[randomNum];
    document.getElementById("thumbImg3").src = gambar[randomNum];
    document.getElementById("thumbImg4").src = gambar[randomNum];
    document.getElementById("thumbImg5").src = gambar[randomNum];
}