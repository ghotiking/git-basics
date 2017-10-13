function LedOff(d) {
document.getElementById('nav-power-on').style.display = "none";
document.getElementById('nav-power-off').style.display = "block";
document.getElementById('nav-led-on').style.display = "none";
document.getElementById('nav-led-off').style.display = "block";
}

function LedOn(d) {
document.getElementById('nav-power-on').style.display = "block";
document.getElementById('nav-power-off').style.display = "none";
document.getElementById('nav-led-on').style.display = "block";
document.getElementById('nav-led-off').style.display = "none";
}

function CediaOn(d) {
document.getElementById('cediabox').style.display = "block";
}

function CediaOff(d) {
document.getElementById('cediabox').style.display = "none";
}