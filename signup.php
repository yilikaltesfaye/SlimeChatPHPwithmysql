<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: users.php");
    }
?>

<?php include_once "header.php" ?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Slime Chat</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label for="">Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                </div>
                    <div class="field input">
                        <label for="">Email Address</label>
                        <input type="email" name="email" placeholder="Enter your Email" required>
                    </div>
                    <div class="field input">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="Enter new Password" required>
                        <icon class="fas fa-eye"></icon>
                    </div>
                    <div class="field image">
                        <label for="">Select Profile</label>
                        <input type="file" name="image" required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Join">
                    </div>
            </form>
            <div class="link">Already Joined? <a href="./login.php">Login Now</a></div>
        </section>
    </div>
    <script src="JS/pass-show-hide.js"></script>
    <script src="JS/signup.js"></script>
</body>
</html>