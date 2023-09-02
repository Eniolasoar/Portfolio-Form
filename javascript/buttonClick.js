function pageClick() {
    var body = document.getElementById("flipBox");
    let buttonTab = document.getElementById("button1");
    let buttonTab2 = document.getElementById("button2");

    body.style.transform = "rotateY(-180deg)";
    buttonTab.style.backgroundColor = "rgb(11, 86, 11)";
    buttonTab2.style.border = "2px solid green";
    var email = document.forms.myform.email.value;
    document.getElementById("insertText").innerText = email;
}


function prevClick() {

    var body = document.getElementById("flipBox");
    let buttonTab = document.getElementById("button1");
    let buttonTab2 = document.getElementById("button2");


    body.style.transform = "rotateY(-0deg)";
    buttonTab.style.backgroundColor = "#004d80";
    buttonTab2.style.border = "";


}
