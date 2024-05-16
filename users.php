<?php 
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
?>

<?php include_once "header.php" ?>
<body>
    <div class="wrapper">
        <section class="users">
            <header>
                <?php 
                    include_once "./php/config.php";
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                    if(mysqli_num_rows($sql) > 0){
                        $row = mysqli_fetch_assoc($sql);
                    }
                ?>
                <div class="image-container">
        <div class="close-btn"><icon class="fa-close"></icon></div>
        <img src="php/images/<?php echo $row['img'] ?>" alt="">
        <p>My Profile Picture - <?php echo $row['fname'] ?>'s</p>
    </div>
                <div class="content">
                    <img class="view-pic" src="php/images/<?php echo $row['img'] ?>" alt="">
                    <div class="details">
                        <span><?php echo $row['fname'] . " " . $row['lname'] ?></span>
                        <p><?php echo $row['status']  ?></p>
                    </div>
                </div>
                <a href="php/logout.php?logout_id=<?php echo $row['unique_id']?>" class="logout">Logout</a>
            </header>
            <div class="users-flex">
            <div class="search">
                <span class="text">Select a user to start chat</span>
                <input type="text" placeholder="Enter name to search...">
                <button><icon class="fas fa-search"></icon></button>
            </div>
            <div class="users-list">
                
            </div>
            </div>
        </section>
    </div>

    <script src="JS/users.js"></script>
    <script>
        const closeBtn = document.querySelector(".close-btn");
        const viewBtn = document.querySelector(".view-pic");
        const imageContainer = document.querySelector(".image-container");
        
        closeBtn.addEventListener("click", function() {
            imageContainer.style.display = "none";
        })
        viewBtn.addEventListener("click", function() {
            imageContainer.style.display = "flex";
        })
    </script>

</body>
</html>
