
<?php include_once "header.php" ?>
<style>
    body {
        gap: .5rem;
    }
    .awrapper {
        width: 5vw;
    height: 94vh;
    background-color: rgba(17,25,40,0.75);
    backdrop-filter: blur(10px) saturate(180%);
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,0.125);
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: space-around;
    box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),
                0 32px 64px -48px rgba(0,0,0,0.5); 
    p {
        font-size: 30px;
    font-weight: 600;
    opacity: 0.2;
    left: 0.5rem;
    text-shadow:  -2px 0 0  rgb(255, 255, 255);
    }
    }
    a {
        letter-spacing: 5px;
        font-weight: 600;
        background-color: #333;
        width: 150px;
        border-radius: 18px;
        padding: 20px;
        height: 60px;
        text-wrap: nowrap;
        color: rgb(133, 160, 211);
        &:hover {
            color: rgb(133, 176, 255);
            background-color: #111;
        }
    }
    .bwrapper{
        width: 5vw;
    height: 94vh;
    background-color: rgba(17,25,40,0.75);
    backdrop-filter: blur(10px) saturate(180%);
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,0.125);
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-direction: column-reverse;
    box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),
                0 32px 64px -48px rgba(0,0,0,0.5); 
    p {
        font-size: 30px;
    font-weight: 600;
    opacity: 0.2;
    left: 0.5rem;
    text-shadow:  -2px 0 0  rgb(255, 255, 255);
    }
}
</style>
<body>
    <div class="awrapper">
    <p>S</p>
    <p>L</p>
    <p>I</p>
    <p>M</p>
    <p>E</p>
    <p>C</p>
    <p>H</p>
    <p>A</p>
    <p>T</p>
    </div>
    <div class="wrapper">
    <a href="./login.php">Join Now</a>
    </div>
    <div class="bwrapper">
    <p>S</p>
    <p>L</p>
    <p>I</p>
    <p>M</p>
    <p>E</p>
    <p>C</p>
    <p>H</p>
    <p>A</p>
    <p>T</p>
    </div>
</body>
</html>