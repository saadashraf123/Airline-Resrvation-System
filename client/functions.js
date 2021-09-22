
function togglePopup(x) {
    document.getElementById("popup-1").classList.toggle("active");

    if (x == 1) {
        document.getElementById("infant").innerHTML = "";

    }
    else if (x == 2) {
        document.getElementById("dealNo").innerHTML = "DEAL 2";
        document.getElementById("adult").innerHTML = " 2 Adults (Age above 18 years).";
        document.getElementById("child").innerHTML = " 1 child (Age below 10 years).";
        document.getElementById("infant").innerHTML = "1 infant (Age below 2 years).";
        document.getElementById("off").innerHTML = "100% free";
        document.getElementById("changes").innerHTML = "Infant";


    }
    else if (x == 3) {
        document.getElementById("dealNo").innerHTML = "DEAL 3";
        document.getElementById("adult").innerHTML = " 4 Adults (Age above 18 years).";
        document.getElementById("child").innerHTML = " 2 child (Age below 10 years).";
        document.getElementById("infant").innerHTML = "1 infant (Age below 2 years).";
        document.getElementById("off").innerHTML = "100% free";
        document.getElementById("changes").innerHTML = "1 child";
    }
    else if (x == 4) {
        document.getElementById("dealNo").innerHTML = "DEAL 4";
        document.getElementById("adult").innerHTML = " 2 Adults (Age above 18 years).";
        document.getElementById("child").innerHTML = " 4 child (Age below 10 years).";
        document.getElementById("infant").innerHTML = "";
        document.getElementById("off").innerHTML = "50% free";
        document.getElementById("changes").innerHTML = "2 child";
    }
    else if (x == 5) {
        document.getElementById("dealNo").innerHTML = "DEAL 5";
        document.getElementById("adult").innerHTML = " 6 Adults (Age above 18 years).";
        document.getElementById("child").innerHTML = "";
        document.getElementById("infant").innerHTML = "2 infant (Age below 2 years).";
        document.getElementById("off").innerHTML = "100% free";
        document.getElementById("changes").innerHTML = "both Infant";
    }
    else if (x == 6) {
        document.getElementById("dealNo").innerHTML = "DEAL 6";
        document.getElementById("adult").innerHTML = " 4 Adults (Age above 18 years).";
        document.getElementById("child").innerHTML = " 4 child (Age below 10 years).";
        document.getElementById("infant").innerHTML = "2 infant (Age below 2 years).";
        document.getElementById("off").innerHTML = "100% free";
        document.getElementById("changes").innerHTML = "1 Infant and 1 child";
    }
}

function myfun() {
    var a = document.getElementById("passwords").value;
    var b = document.getElementById("passwordss").value;

    if (a == "") {
        document.getElementById("error").innerHTML = "** Please Fill Password **";
        return false;
    }

    else if (a.length < 5) {
        document.getElementById("error").innerHTML = "** Password length must be greater then 5 characters **";
        return false;
    }

    else if (a.length > 25) {
        document.getElementById("error").innerHTML = "** Password length must be smaller then 25 characters **";
        return false;
    }
    else if (a != b) {
        document.getElementById("error").innerHTML = "** Passwords are not same **";
        return false;
    }
    else{
        return true;
    }
}
