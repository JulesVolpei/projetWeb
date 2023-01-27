function myFunction() {
    var x = document.getElementById("navbar");
    if (x.className === "nav") {
        x.className += " responsive";
    } else {
        x.className = "nav";
    }
}

function afficherInserer() {
    if (document.getElementById("formInserer").style.display == "flex") {
        document.getElementById("formInserer").style.display = "none";
    } else {
        document.getElementById("formInserer").style.display = "flex";
    }

}

function afficherModifier() {
    if (document.getElementById("formModifier").style.display == "flex") {
        document.getElementById("formModifier").style.display = "none";
    } else {
        document.getElementById("formModifier").style.display = "flex";
    }
}