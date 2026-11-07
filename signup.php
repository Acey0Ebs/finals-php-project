<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="styleSignUp.css">
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
            <p id="lmao"><i>Sponsored by Julian's Canton.</i></p>
        </div>
    </div>
        </div>

    <div class="right-container">
        <div class="right-image-box">
            <img src="assets/locate.png" alt="locate" class="locate">
            <p class="header-p">Create An Account</p>
            <p class="header2">Find your home or manage your boarding house.</p>
        </div>

        <div class="form-box">
            <p>I am a...</p>

<!-- ========================================================== -->

            <div class="selection-box-center">

                <div class="selection-cards">

                <label class="select-card-left">
                    <input type="radio" name="plan" value="basic" class="hidden-radio">
                <div class="card-content">
                    <p><b>Boarder</b></p>
                </div>
                </label>

                <label class="select-card-right">
                    <input type="radio" name="plan" value="pro" class="hidden-radio">
                <div class="card-content">
                    <p><b>Landlady/Landlord</b></p>
                </div>
                </label>
                
            </div>

            </div>

<!-- ========================================================== -->

<br>

        <div class="inner-form-box">
        <label class="form-labels">Full Name</label>
        <br>
        <input type="text" placeholder="Enter Your Full Name" class="input-fields">
        <br>
        <label class="form-labels">Birthdate</label>
        <br>
        <input type="date" placeholder="Enter Your Birthdate" class="input-fields">
        <br>
        <label class="form-labels">Contact Number</label>
        <br>
        <input type="number" placeholder="Enter Your Contact Number" class="input-fields">
        <br>
        <label class="form-labels">Email Address</label>
        <br>
        <input type="email" placeholder="Enter your Email Address" class="input-fields">
        <br>
        <label class="form-labels">Password</label>
        <br>
        <input type="password" placeholder="Create Password" class="input-fields">
        <p id="owo">Use at least 8 Characters</p>
        <label class="form-labels">Confirm Password</label>
        <br>
        <input type="password" placeholder="Re-enter Your Password" class="input-fields">
        </div>

        <div class="terms-of-service">
            <p>By creating an account, you agree to our <br><a href="terms_of_service.html">Terms of Service</a> and <a href="terms_of_service.html">Privacy Policy</a></p>
        </div>

        </div>

        <div class="button-center">
                <input type="submit" value="Create Account">
            </div>



        <div class="third-box">
            Already have an account?
            <a href="index.php"> Login.</a>
        </div>
    </div>
</body>
</html>