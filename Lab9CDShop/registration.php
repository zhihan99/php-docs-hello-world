<!DOCTYPE html> 
<html lang="en"> 
<head>
    <style>
        .register form li {
    list-style: none;
    margin-bottom: 5px;
    }
    
    .register form ul li label{
    float: left;
    clear: left;
    width: 100px;
    text-align: right;
    margin-right: 10px;
    font-family:Verdana, Arial, Helvetica, sans-serif;
    font-size:14px;
    }
    
    .register form ul li input, select, span {
    float: left;
    margin-bottom: 10px;
    }
    
    .register form textarea {
    float: left;
    width: 350px;
    height: 150px;
    }
    
    [type="submit"] {
    clear: left;
    margin: 20px 0 0 230px;
    font-size:18px
    }
    
    .register form p {
    margin-left: 70px;
    font-weight: bold;
    }
    </style> 
<title>Merdu Music CD Shop</title>
<link rel="stylesheet" href="LabCSS\mystyle.css"> 
</head>
<header>
    <h1><img src="LabCSS\musicicon.png" style="width: 30px; height:30px;">
    Merdu Music CD Shop
    <a href="#cart" style="float: right; text-decoration: none;">Shopping Cart</a>
    <img src="https://i.pinimg.com/originals/15/4f/df/154fdf2f2759676a96e9aed653082276.png" style="width: 30px; height:30px; float: right;" >
    </h1>

    <script type="text/JavaScript">
        //Javascript form validation
        function formValidation()
        {
            var usern = document.forms["registration"]["username"];
            var passid = document.forms["registration"]["passid"];
            var uadd = document.forms["registration"]["address"];
            var uemail = document.forms["registration"]["email"];
            var uphone = document.forms["registration"]["phone"];
                
                //username validation
                if (usern.value == "") 
                {
                    window.alert("Please enter your username.");
                    usern.focus();
                    return false;
                }

                //password validation
                if (passid.value == "") 
                {
                    window.alert("Please enter your password.");
                    passid.focus();
                    return false;
                }

                //address validation
                if (uadd.value == "") 
                {
                    window.alert("Please enter your address.");
                    uadd.focus();
                    return false;
                }

                //email validation
                if (uemail.value == "") 
                {
                    window.alert("Please enter your email address.");
                    uemail.focus();
                    return false;
                }

                //phone number validation
                if (uphone.value == "") 
                {
                    window.alert("Please enter your phone number.");
                    uphone.focus();
                    return false;
                }

                window.alert("Your registration form is submitted.");
                return true;
            
        }
    </script>
</header>
<body>
    <div class="sidenav">
        <b>Categories</b><br>
        <a href="kpop.php">K-pop</a>
        <a href="jpop.php">J-pop</a>
        <a href="anime.php">Anime</a>
        <a href="soundtrack.php">Soundtrack</a>
        <a href="western.php">Western Music</a>
      </div>
    <br>
    <h2 style="border-bottom: solid; ">Registration Form</h2>
    <div class="register">
    <form name='registration' onSubmit="return formValidation();">
        <ul>
        <li><label for="username">Username:</label></li>
        <li><input type="text" name="username" size="12" /></li>
        <li><label for="passid">Password:</label></li>
        <li><input type="password" name="passid" size="12" /></li>
        <li><label for="address">Address:</label></li>
        <li><input type="text" name="address" size="50" /></li>
        <li><label for="email">Email:</label></li>
        <li><input type="text" name="email" size="50" /></li>
        <li><label for="phone">Phone number:</label></li>
        <li><input type="text" name="phone" size="50" /></li>
        <li><input type="submit" name="submit" value="Submit" /></li>
        </ul>
        </form>
    </div>
</body>
</html>