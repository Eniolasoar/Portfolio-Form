let password = document.forms.myform.password;
password.addEventListener("focus", passwordBoxReveal);

function passwordBoxReveal() {
    let passwordBox = document.getElementById("passwordBox");

    passwordBox.style.display = "block";

    let boxToggle = document.getElementById("boxToggle");
    boxToggle.style.marginRight = "350px";
}

password.addEventListener("blur", passwordBoxHide);

function passwordBoxHide() {
    let passwordBox = document.getElementById("passwordBox");
    passwordBox.style.display = "none";

    let boxToggle = document.getElementById("boxToggle");
    boxToggle.style.marginRight = "";

}


password.addEventListener("input", passwordValidate);

function passwordValidate() {


    var lowerCasePattern = /[a-z]/g;
    var upperCasePattern = /[A-Z]/g;
    var numbersPattern = /[0-9]/g;




    let checkBox = document.getElementsByClassName("checkbox");
    let check = document.getElementById("checkbox1");
    let labels = document.getElementsByClassName("container");
    let customCheckbox = document.getElementsByClassName("custom-checkbox");

    let lowercase = document.getElementById("lowercase");
    let uppercase = document.getElementById("uppercase");
    let numbers = document.getElementById("numbers")
    let symbols = document.getElementById("symbols");
    let passwordLength = document.getElementById("passwordLength");


    if (password.value.match(lowerCasePattern)) {
        // checkBox[0].checked="false";

        labels[0].style.color = "green";
        lowercase.classList.remove("invalid");
        lowercase.classList.add("custom-checkbox");
        password.addEventListener("input", passwordValidate);





    } else {

        labels[0].style.color = "red";
        lowercase.classList.remove("custom-checkbox");
        lowercase.classList.add("invalid");
        password.addEventListener("input", passwordValidate);
    }


    if (password.value.match(upperCasePattern)) {
        // checkBox[0].checked="false";

        labels[1].style.color = "green";
        uppercase.classList.remove("invalid");
        uppercase.classList.add("custom-checkbox");
        password.addEventListener("input", passwordValidate);




    } else {
        // check.checked=false;
        labels[1].style.color = "red";
        uppercase.classList.remove("custom-checkbox");
        uppercase.classList.add("invalid");
        password.addEventListener("input", passwordValidate);
    }


    if (password.value.match(numbersPattern)) {

        labels[2].style.color = "green";
        numbers.classList.remove("invalid");
        numbers.classList.add("custom-checkbox");
        password.addEventListener("input", passwordValidate);




    } else {

        labels[2].style.color = "red";
        numbers.classList.remove("custom-checkbox");
        numbers.classList.add("invalid");
        password.addEventListener("input", passwordValidate);
    }

    var symbolPattern = /[@$!@%^&*()+_.]/;
    if (password.value.match(symbolPattern)) {
        // checkBox[0].checked="false";
        check.checked = true;
        labels[3].style.color = "green";
        symbols.classList.remove("invalid");
        symbols.classList.add("custom-checkbox");
        password.addEventListener("input", passwordValidate);




    } else {

        labels[3].style.color = "red";
        symbols.classList.remove("custom-checkbox");
        symbols.classList.add("invalid");
        password.addEventListener("input", passwordValidate);
    }


    if (password.value.length >= 6 && password.value.length <= 21) {
        // checkBox[0].checked="false";

        labels[4].style.color = "green";
        passwordLength.classList.remove("invalid");
        passwordLength.classList.add("custom-checkbox");
        password.addEventListener("input", passwordValidate);




    } else {

        labels[4].style.color = "red";
        passwordLength.classList.remove("custom-checkbox");
        passwordLength.classList.add("invalid");
        password.addEventListener("input", passwordValidate);
    }

    if (password.value.match(lowerCasePattern) && password.value.match(upperCasePattern) && password.value.match(numbersPattern) && password.value.match(symbolPattern) && (password.value.length > 6 && password.value.length < 22)) {
        document.querySelector(".checktick").style.display = "block";
        document.querySelector("#button").style.display = "block";
    }

}
