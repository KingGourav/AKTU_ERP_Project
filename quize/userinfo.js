let user = sessionStorage.getItem("name");
let p = sessionStorage.getItem("points");
let t = sessionStorage.getItem("time");



document.querySelector(".user").innerHTML = user;
document.querySelector(".points").innerHTML = p;
document.querySelector(".time").innerHTML = t;
