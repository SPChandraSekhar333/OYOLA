let element1 = document.getElementById("service-1-link");
let element2 = document.getElementById("service-2-link");
let element3 = document.getElementById("service-3-link");
let element4 = document.getElementById("service-4-link");
let element5 = document.getElementById("service-5-link");

let close1 = document.getElementById("close1");
let close2 = document.getElementById("close2");
let close3 = document.getElementById("close3");
let close4 = document.getElementById("close4");
let close5 = document.getElementById("close5");

let modal1 =  document.getElementById("modal1");
let modal2 =  document.getElementById("modal2");
let modal3 =  document.getElementById("modal3");
let modal4 =  document.getElementById("modal4");
let modal5 =  document.getElementById("modal5");

element1.onclick = function() {
    modal1.style.display = "block"; 
}

close1.onclick = function(){
    modal1.style.display = "none"; 
}

element2.onclick = function() {
    modal2.style.display = "block"; 
}

close2.onclick = function(){
    modal2.style.display = "none"; 
}

element3.onclick = function() {
    modal3.style.display = "block"; 
}

close3.onclick = function(){
    modal3.style.display = "none"; 
}

element4.onclick = function() {
    modal4.style.display = "block"; 
}

close4.onclick = function(){
    modal4.style.display = "none"; 
}

element5.onclick = function() {
    modal5.style.display = "block"; 
}

close5.onclick = function(){
    modal5.style.display = "none"; 
}