<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main-container">
        <div class="image-container-bg">
            <div class="left-box">
        <div class="first-inner-lbox">
            <img src="assets/talisay.png" alt="Logo" class="talisay">
        <div class="inner-filbox">
            <h1>TALISAY CITY</h1>
        <p><i>Boarding House Inquiry System</i></p>
        </div>
        </div>
        <div class="second-inner-lbox">
            <h2>Find your</h2>
            <h3>perfect stay.</h3>
            <p><i>Your home away from home starts here.</i></p>
            <p id="lmao"><i>Powered by Julian's Canton.</i></p>
        </div>
    </div>
        </div>
    <div class="right-box">
        <div class="first-inner-rbox">
            <img src="assets/locate.png" alt="User Icon" class="locate">
            <p id="lmao2">Welcome!</p>
            <p>Login to find the best boarding house of your choice!</p>
        </div>
        <div class="second-inner-rbox">
            <form>
            <input type="email" name="email" placeholder="Enter Email Address" required>
            <br><br>

            <input type="password" name="password" placeholder="Enter User Password" required>
            <br><br>
            <input type="submit" value="Login"></input>
        </form>


        <!-- Echo Goes Here For the Invalid Entry -->
        <p style="color: red;"></p>
        </div>



        <div><hr></div>
        <div class="third-box">
            Don't have an account?
            <a href="signup.php"> Sign up.</a>
        </div>
    </div>
    </div>
</body>
</html>