function setSize () {
    let width = window.innerWidth;
    let height = window.innerHeight;
    
    document.getElementById("container").style.width = width + "px";
    document.getElementById("container").style.height = height + "px";
}

setInterval(setSize,1000);