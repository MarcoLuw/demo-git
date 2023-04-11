<?php
    session_start();
    //if user is logged in
    if (isset($_SESSION['unique_id'])) {
        header("location: users.php");
    }
?>
<?php include_once "header.php" ?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat App</header>
            <form action="#" autocomplete="off">
                <div class="error-txt"></div>
                <div class="field input">
                    <label>Enter your email</label>
                    <input type="text" name="email" placeholder="Email Address">
                </div>
                <div class="field input">
                    <label>Enter your password</label>
                    <input type="password" name="password" placeholder="Password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Not yet signed up? <a href="index.php">Signup Now</a></div>
        </section>
    </div>
    <script src="js/pass-show-hide.js"></script>
    <script src="js/login.js"></script>
</body>
</html>