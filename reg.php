<!DOCTYPE html>
<html lang="eng">
<head>
    <title>Sweettea</title>
    <link rel="stylesheet" href="Registration.css">
</head>
<body>

    
    <header>

        <div class="head">
        <div class="sweetteas">
            <a href="#">SWEETTEA</a>
        </div>
        <div class="tabs">
            <a href="#">HOME</a>
            <a href="#">ABOUT US</a>
            <a href="#">MENU</a>
            <a href="#" id="coloredsignin">SIGN IN</a>
        </div>
        </div>
   
    </header>

    <div class="centerbox">
        <div id="bluebox">
            <img src="mockup 1.png" alt="milktea" >
        </div>
        
        <div class="formcontent">
            <div>
                <div class="welcometext">
                    <p id="wsttext">Welcome to SweetTea</p>
                    <p id="wscaption">Sign Up to Continue</p>
                </div>
                
                <div id="formbox">
                    <form action="includes/signup.inc.php" method="post">
                        <div id="labelandboxes">

                        <label for="username" class="userlbl">Username:</label><br>
                        <input type="text" id="name" size="50" maxlength="50"  class="textbox" name="name"><br>

                        <label for="email" class="emaillbl">E-mail:</label><br>
                        <input type="text" id="eaddress" size="50" maxlength="50" class="textbox" name="email"><br>

                        <label for="password" class="passlbl">Password:</label><br>
                        <input type="password" id="word" size="50" maxlength="16" class="textbox" name="password"><br>

                        <label for="cpassword" class="cpasslbl">Confirm Password:</label><br>
                        <input type="password" id="word" size="50" maxlength="16" class="textbox" name="cpassword"><br>

                        </div>

                        <div id="signupbttn">
                            <input type="submit" value="Sign Up" id="signup" name="submit">
                        </div>

                        <div id="formfooter">
                            <p> Already have an account? <a href="https://www.facebook.com">Sign In</a> </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>