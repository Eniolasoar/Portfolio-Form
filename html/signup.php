<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../Css/signup.css" />
  <title>Document</title>
  <style>
    input:focus {
      outline: 2px solid black;
      background-color: #004d80 !important;
    }


    input[type="radio"] {
      accent-color: #004d80;
    }

    /* .animation {
         animation:placeholder 4s ease-in-out 
      } */
    option {
      color: black;
    }

    @keyframes placeholder {
      0% {
        top: 50%;
        left: -200px;
        visibility: hidden;
      }

      50% {
        left: 50%;
      }

      90% {
        transform: rotateY(180deg);
      }

      /*
        100%{
            transform: rotateY(360deg);
           
        } */
    }

    .align-items {
      display: flex;

      flex-direction: row;
      justify-content: center;
      gap: 150px;
      align-items: center;
    }

    .body {
      background-color: rgba(0, 162, 252);
      height: 536px;
      width: 400px;

      padding: 10px 30px;
      box-shadow: -7px 8px rgba(0, 77, 128);
      transition: 3.5s;
    }

    body {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 85vh;
      min-height: 536px;
    }

    button {
      width: 100px;
      background-color: #004d80;
      padding: 10px;
      text-align: center;
      border-radius: 10px;
      font-size: 16px;
      font-weight: 600;
      box-shadow: -5px 5px #56c1ff;

    }

    #button {
      float: right;
    }

    button:hover {
      cursor: pointer;
    }

    button:active {
      box-shadow: 0 2px #56c1ff;
      transform: translateY(4px);
      cursor: pointer;
    }

    .bubble1 {
      width: 50px;
      height: 50px;
      background-color: transparent;
      background-image: linear-gradient(200deg,
          white,
          rgba(0, 162, 252),
          #004d80);
      border-radius: 50%;
      opacity: 0.4;
      margin: 5px 0;
    }

    .bubbles {
      width: 100%;
      display: flex;
      align-items: center;
      position: absolute;
      justify-content: space-around;
      bottom: -90px;
    }

    .bubble {
      animation: bubble 4s ease-in-out infinite;
    }

    .bubbles1 {
      animation-delay: 5s;
    }

    .bubbles2 {
      animation-delay: 4.2s;
    }

    .bubbles3 {
      animation-delay: 3.5s;
    }

    .bubbles4 {
      animation-delay: 6s;
    }

    .bubbles5 {
      animation-delay: 5.2s;
    }

    .bubbles6 {
      animation-delay: 1.8s;
    }

    .bubbles7 {
      animation-delay: 0.5s;
    }

    .bubbles8 {
      animation-delay: 7s;
    }

    .bubbles9 {
      animation-delay: 2s;
    }

    .bubbles10 {
      animation-delay: 2.5s;
    }

    @keyframes bubble {
      0% {
        transform: translateY(0);
        opacity: 0;
      }

      50% {
        opacity: 1;
      }

      100% {
        transform: translateY(-80vh);
        opacity: 0;
      }
    }

    .container {
      display: block;
      margin: 15px 0;
      user-select: none;
      position: relative;
      padding-left: 30px;
    }

    .checkbox-group {
      position: absolute;
      opacity: 0;
      cursor: pointer;
      height: 0;
      width: 0;


    }

    .custom-checkbox {
      position: absolute;
      width: 20px;
      height: 20px;
      background-color: #56c1ff;
      border-radius: 5px;
      top: 0;
      left: 0;
    }

    .custom-checkbox:after {
      content: "";
      position: absolute;
    }

    .container .custom-checkbox::after {
      position: absolute;
      left: 5px;
      top: 2px;
      width: 5px;
      height: 10px;
      border: solid rgb(11, 86, 11);
      ;
      border-width: 0 4px 4px 0;
      transform: rotate(45deg);
    }

    /* .container input:checked ~ .custom-checkbox::after {
        display: block;
      } */

    .invalid {
      position: absolute;
      width: 20px;
      height: 20px;
      background-color: #56c1ff;
      border-radius: 5px;
      top: 0;
      left: 0;
    }

    .invalid:after {
      content: "✖";
      position: absolute;
      color: red;
    }

    .container .invalid::after {
      position: absolute;
      left: 3px;
      top: 1px;
    }

    .container input:checked~.invalid::after {
      display: block;
    }

    #passwordBox {
      transition: 1s all;
      display: none;
    }

    .done {

      color: rgb(11, 86, 11);
      font-weight: bolder;
      font-size: 30px;
      margin: 0;
      text-align: center;

    }




    .passwordToggle {
      width: 15px;
      height: 15px;
      accent-color: #56c1ff;
      border-radius: 5px;
      margin-top: 10px;


    }

    .passwordToggle:focus {
      border: none;
    }

    .flip-container {
      width: 400px;
      height: 536px;
      background-color: transparent;
      perspective: 1000px;

    }

    .flip-box {
      position: relative;
      width: 100%;
      height: 100%;

      transition: transform 0.8s;
      transform-style: preserve-3d;
    }

    .flip-front,
    .flip-back {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;

    }

    .flip-back {

      transform: rotateY(180deg);
    }



    .box-toggle {
      display: flex;
      justify-content: space-around;
      margin-bottom: 10px;
    }

    .box1 {
      width: 70px;
      height: 70px;
      background-color: #004d80;
      margin: 0px 10px;
      display: inline-block;
      border-radius: 50%;
      font-size: 12px;
      font-weight: bold;
      padding: 5px;
      animation: fadeEffect 5s;
    }

    @keyframes fadeEffect {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    .box1:before {
      content: "_________";
      margin-left: 65px;
      height: 30px;
    }

    .box1:hover {
      cursor: pointer;
    }


    .code-container {
      margin-left: auto;
      margin-right: auto;
    }

    .code-box {
      width: 58px;
      height: 58px;
      border-radius: 9px;
      display: inline-block;
      margin: 0 3px;


      background-color: #004d80;
      margin-top: 60px;
    }

    .bottom-button {
      position: absolute;
      bottom: 10px;
      left: 70%;
    }

    .code-heading {
      padding-top: 30px;
    }

    .link {
      display: block;
      padding-top: 20px;
      font-size: 20px;
      color: black;
    }

    .body2 {
      background-color: rgba(0, 162, 252);
      height: 536px;
      width: 400px;

      padding: 10px 30px;
      box-shadow: -7px 8px rgba(0, 77, 128);
      transition: 3.5s;
    }



    button[type="submit"] {
      position: relative;
      top: 10px;
      left: 50%;
      transform: translate(-50%);
      width: 70%;
    }

    #insertText {
      font-size: 20px;
      text-decoration: underline;
      text-align: center;
      color: #004d80;
    }

    .boxBorder1 {
      border: 2px solid green;
    }

    .checktick {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      gap: 10px;
      display: none;
    }

    .checkmark__circle {
      stroke-dasharray: 166;
      stroke-dashoffset: 166;
      stroke-width: 2;
      stroke-miterlimit: 10;
      stroke: #7ac142;
      fill: none;
      animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards
    }

    .checkmark {
      width: 56px;
      height: 56px;
      border-radius: 50%;
      display: block;
      stroke-width: 2;
      stroke: #fff;
      stroke-miterlimit: 10;
      margin: 10% auto;
      box-shadow: inset 0px 0px 0px #7ac142;
      animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both
    }

    .checkmark__check {
      transform-origin: 50% 50%;
      stroke-dasharray: 48;
      stroke-dashoffset: 48;
      animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards
    }

    @keyframes stroke {
      100% {
        stroke-dashoffset: 0
      }
    }

    @keyframes scale {

      0%,
      100% {
        transform: none
      }

      50% {
        transform: scale3d(1.1, 1.1, 1)
      }
    }

    @keyframes fill {
      100% {
        box-shadow: inset 0px 0px 0px 30px #7ac142
      }
    }

    .body2 img {
      width: 168px;
      height: 168px;
      border-radius: 50%;

    }

    .body2 {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 60px;
      justify-content: space-around;
    }

    input[type="file"] {
      padding: 20px;
      margin: 20px 0px 10px 20px;
    }
  </style>
</head>

<body onload="animate1()">

  <?php
  if (isset($_GET["error"])) {
    if ($_GET['error'] == "usernameExists") {
      include_once "message.html";
    } else if ($_GET['error'] == "emailExists") {
      include_once "message2.html";
    }
  }
  ?>


  <div class="box-toggle" id="boxToggle">
    <div class="box1 boxBorder1" id="button1" onclick="prevClick()">
      Personal Information
    </div>
    <div class="box1 " id="button2" onclick="pageClick()">
      Email Validation
    </div>
    <div class="box1" id="button3">
      Profile Confirmation
    </div>
  </div>
  <div class="flip-container">
    <form action="../php/signup.inc.php" method="POST" id="myform" enctype="multipart/form-data">
      <div class="flip-box" id="flipBox">
      
        <div class="flip-front">

          <div class="align-items">

            <div class="flex-box1" id="content">



              <div class="flexbox-container">



                <div class="body" id="body1">
                  <h2>Sign up to create an account</h2>

                  <div class="row1" style="position: relative">
                    <input type="text" name="firstname" class="inputField input" /><br />
                    <label class="placeholder">First Name:</label>
                  </div>

                  <div class="row1" style="position: relative">
                    <input type="text" name="lastname" class="inputField input" /><br />
                    <label class="placeholder">Last Name:</label>
                  </div>

                  <div class="row1" style="position: relative">
                    <input type="text" name="username" class="inputField input" /><br />
                    <label class="placeholder">Username:</label>
                  </div>

                  <div class="row1" style="position: relative">
                    <input type="email" name="email" class="inputField input" /><br />
                    <label class="placeholder" style="padding-left: 38px">
                      Email Address:</label>
                  </div>

                  <label for="gender">Nationality:</label>
                  <input list="nations" class="nation" name="nationality" style="color: black; font-weight: bold; font-size: 15px" />
                  <datalist id="nations">
                    <option value="Nigeria">Nigeria</option>
                    <option value="SouthAfrica">South Africa</option>
                    <option value="USA">USA</option>
                    <option value="Canada">Canada</option>
                    <option value="China">China</option>
                  </datalist><br />

                  <label for="gender" class="check1">Choose gender:</label>
                  <input type="radio" value="Male" name="gender" id="male" style="margin-left: 5px; background-color: #004d80" />
                  <label style="margin-right: 5px" class="check1">Male</label>
                  <input type="radio" value="Female" name="gender" id="female" />
                  <label class="check1">Female</label><br />

                  <div class="row1" style="position: relative">

                    <input type="password" name="password" class="inputField input " />
                    <input type="checkbox" name="" class="passwordToggle" onclick="passwordEdit()"><br>
                    <label class="placeholder ">Password:</label>

                  </div>

                  <div class="row1" style="position: relative">
                    <input type="password" name="repeatPassword" class="inputField input" />
                    <input type="checkbox" name="" class="passwordToggle" onclick="passwordEditTwo()"><br>
                    <label class="placeholder" style="padding-left: 68px">Confirm Password:</label>
                  </div>

                  <script>
                    function passwordEdit() {
                      var passwordVisible = document.forms.myform.password;
                      if (passwordVisible.type === "password") {
                        passwordVisible.type = "text";
                      } else {
                        passwordVisible.type = "password";
                      }
                    }

                    function passwordEditTwo() {
                      var passwordVisible2 = document.forms.myform.repeatPassword;
                      if (passwordVisible2.type === "password") {
                        passwordVisible2.type = "text";
                      } else {
                        passwordVisible2.type = "password";
                      }
                    }
                  </script>

                  <button type="button" id="button" name="submitbtn" onclick="pageClick()">
                    Next
                  </button>

                  <script src="../javascript/script.js"></script>


                </div>
              </div>
            </div>

            <div class="password-box" id="passwordBox">
              <h2 style="font-family: lucida handwriting">
                Please follow this specification below
              </h2>
              <label class="container " style="color: white; font-size: 18px; font-weight: bold">Must contain lowercase letters
                <input type="checkbox" class="checkbox checkbox-group" id="checkbox1" />
                <span class="invalid checkboxChecked" id="lowercase"></span>
              </label>

              <label class="container" style="color: white; font-size: 18px; font-weight: bold">Must contain uppercase letters
                <input type="checkbox" class="checkbox checkbox-group" />
                <span class="invalid checkboxChecked" id="uppercase"></span>
              </label>

              <label class="container" style="color: white; font-size: 18px; font-weight: bold">Must contain numbers
                <input type="checkbox" class="checkbox checkbox-group" />
                <span class="invalid checkboxChecked" id="numbers"></span>
              </label>

              <label class="container" style="color: white; font-size: 18px; font-weight: bold">Must contain symbols
                <input type="checkbox" class="checkbox checkbox-group" />
                <span class="invalid checkboxChecked" id="symbols"></span>
              </label>

              <label class="container" style="color: white; font-size: 18px; font-weight: bold">Password must be between 7-20(inclusive)
                <input type="checkbox" class="checkbox  checkbox-group" />
                <span class="invalid checkboxChecked" id="passwordLength"></span>
              </label>
              <div class="checktick">
                <div class="wrapper">
                  <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                    <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                    <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                  </svg>
                </div>
                <p id="doneCheck" class="done">You are all set</p>
              </div>


            </div>

            <script>
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
            </script>
          </div>
        </div>
        <div class="flip-back">
          <div class="body2" style="position:relative;">
            <img src="../images/html.png">
            <div class="flexbox">
              <h2>Upload Profile Picture:</h2>
              <input type="file" name="file">

              <button type="submit" name="submitbtn" onclick="buttonChange()" id="submit">Submit</button>
            </div>


          </div>
        </div>


     

        <script>
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
        </script>
      </div>
    </form>
  </div>
  </div>

  <script>
    let content = document.getElementById("content");
    let button1 = document.getElementById("button1");
    let button2 = document.getElementById("button2");
    let button3 = document.getElementById("button3");


    function nextPage(event, page) {

    }

    //when the next button is clicked,it should rotate the body
    //and then make the box green
  </script>


  <div class="bubbles">
    <div class="bubble1 bubble bubbles1"></div>
    <div class="bubble1 bubble bubbles2"></div>
    <div class="bubble1 bubble bubbles3"></div>
    <div class="bubble1 bubble bubbles4"></div>
    <div class="bubble1 bubble bubbles5"></div>
    <div class="bubble1 bubble bubbles6"></div>
    <div class="bubble1 bubble bubbles7"></div>
    <div class="bubble1 bubble bubbles8"></div>
    <div class="bubble1 bubble bubbles9"></div>
    <div class="bubble1 bubble bubbles10"></div>
  </div>
</body>

<script src="../javascript/password.js"></script>

</html>