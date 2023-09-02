<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../Css/signup.css" />
  <title>Document</title>

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
        <script src="../javascript/password.js"></script>
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


     

        <script src="../javascript/buttonClick.js">
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