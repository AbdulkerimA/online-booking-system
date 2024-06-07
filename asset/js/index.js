
// set width and height for hero
function setSize () {
    let width = window.innerWidth;
    let height = window.innerHeight - 100;
    
    document.getElementById("home").style.width = width + "px";
    document.getElementById("home").style.height = height + "px";
    document.getElementById("cover").style.height = height + "px";
}

setInterval(setSize,1000);

// display and hide login page
let isActive = false;
function handleLogin(){

    if (isActive){
        isActive = false;
        document.getElementById("logincontainer").style.visibility="hidden";
    }
    else{
        isActive = true;
        document.getElementById("logincontainer").style.visibility="visible";
    }
}

// deactivate when the anywhare is clicked outside the login 
function deactivateLogin(){
    isActive = false;
    document.getElementById("logincontainer").style.visibility = "hidden";
}
