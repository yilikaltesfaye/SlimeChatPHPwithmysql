<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: users.php");
    }
?>

<?php include_once "header.php" ?>
<body>
    <div class="wrapper">
        <section class="form login">
            <div class="home"><a href="index.php">HomePage</a></div>
            <header>Log In</header>
            <form action="#">
                <div class="error-txt"></div>
                    <div class="field input">
                        <label for="">Email Address</label>
                        <input type="email" name="email" placeholder="Enter your Email">
                    </div>
                    <div class="field input">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="Enter your Password">
                        <icon class="fas fa-eye"></icon>
                    </div>
                    <div class="field button" class="input-login">
                        <input type="submit" value="Login">
                    </div>
            </form>
            <div class="link">Not Yet Joined? <a href="./signup.php">Signup Now</a></div>
        </section>
    </div>
    <script src="JS/pass-show-hide.js"></script>
    <script src="./JS/login.js"></script>
</body>
</html>