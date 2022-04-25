alert("Hello, welcome to my website! \nPress OK to Continue");

function nameFunction() {
    var name = document.getElementById("name").value;
if (new Date().getHours() < 18) {
    document.getElementById("welcome").innerHTML = "Good morning " + name + ", Welcome to my website!"
} else if (new Date().getHours() < 19) {
    document.getElementById("welcome").innerHTML = "Good day " + name + ", Welcome to my website!"
} else {
    document.getElementById("welcome").innerHTML = "Good evening " + name + ", Welcome to my website!"
}
}



