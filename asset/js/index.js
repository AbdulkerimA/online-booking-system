
// set width and height for hero
function setSize () {
    let width = window.innerWidth;
    let height = window.innerHeight - 100;
    
    document.getElementById("home").style.width = width + "px";
    document.getElementById("home").style.height = height + "px";
}

setInterval(setSize,1000);