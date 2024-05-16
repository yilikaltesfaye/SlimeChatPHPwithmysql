<?php 
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
?>

<?php include_once "header.php" ?>
<body>
    <div class="wrapper">
        <section class="chat-area">
            <header> 
            <?php 
                    include_once "./php/config.php";
                    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
                    if(mysqli_num_rows($sql) > 0){
                        $row = mysqli_fetch_assoc($sql);
                    }
                ?>
                
                <a href="users.php" class="back-icon"><icon class="fas fa-arrow-left"></icon></a>
                <img class="view-pic" src="php/images/<?php echo $row['img'] ?>" alt="">
                <div class="details">
                    <span><?php echo $row['fname'] . " " . $row['lname'] ?></span>
                    <p><?php echo $row['status']  ?></p>
                </div>
            </header>
            <div class="chat-box">
                
            </div>
            <form action="#" class="typing-area">
                <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
                <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                <input type="text" name="message" class="input-field" placeholder="Type a message here...">
                <button><icon class="fas fa-paper-plane"></icon></button>
            </form>
        </section>
    </div>
    <div class="image-container">
        <div class="close-btn"><icon class="fa-close"></icon></div>
        <img src="php/images/<?php echo $row['img'] ?>" alt="">
        <p><?php echo $row['fname'] . " " . $row['lname'] ?>'s Profile Picture</p>
    </div>
    <script src="./JS/chat.js"></script>
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