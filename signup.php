<!-- header -->
<?php include 'header.php'; ?>

<!-- CSS -->
<link rel="stylesheet" href="css/signup.css">

<main>
    <div class="login-box">
        <h1>Sign Up</h1>
        <div class="textbox">
            <i class="fas fa-lock" aria-hidden="true"></i>
            <input type="text" placeholder="Full Name" name="" value="" require>
        </div>
        <div class="textbox">
            <i class="fas fa-lock" aria-hidden="true"></i>
            <input type="text" placeholder="Username" name="" value="" require>
        </div>
        <div class="textbox">
            <i class="fas fa-lock" aria-hidden="true"></i>
            <input type="password" placeholder="Password" name="" value="" require>
        </div>
        <div class="textbox">
            <i class="fas fa-lock" aria-hidden="true"></i>
            <input type="email" placeholder="Email Address" name="" value="" require>
        </div>
        <div class="textbox">
            <i class="fas fa-lock" aria-hidden="true"></i>
            <input type="text" placeholder="Mobile Number" name="" value="" maxlength="12" require>
        </div>
        <div class="textbox">
            <i class="fas fa-lock" aria-hidden="true"></i>
            <input type="text" placeholder="City" name="" value="" require>
        </div>

        <input class="btn" type="button" name="" value="Sign Up">
    </div>
</main>

<!-- footer -->
<?php include 'footer.php'; ?>