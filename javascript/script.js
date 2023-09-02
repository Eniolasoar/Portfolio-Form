//first step..Get all the input
var input = document.getElementsByClassName("inputField");
var j;
var i;

for (i = 0; i < input.length; i++) {
  input[i].addEventListener("focus", function () {
    var label = this.parentElement.lastElementChild;

    label.style.top = "20%";
    label.style.fontSize = "15px";
    label.style.color = "white";
  });
}
//a function



