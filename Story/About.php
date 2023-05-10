<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />    
  <title>About me</title>
</head>
<body>
    <?php include 'header.php' ?>
    <?php $abouts=["As an introvert, I have always found solace in the things that I love. Reading has been a constant companion throughout my life, transporting me to different worlds and allowing me to escape from reality for a little while. Cooking is another passion of mine, as it allows me to create something tangible and share it with others without having to engage in small talk or socializing. ",
    "Playing games, both video and board games, has also been a favorite pastime of mine. It provides a sense of challenge and accomplishment without the pressure of social interaction. 
    ","In recent years, I have discovered a new love: building web apps. The process of coding and creating something from scratch is both challenging and rewarding, and it allows me to express my creativity in a unique way.",
    "While some may view being an introvert as a negative trait, I embrace it as part of who I am. These hobbies bring me joy and allow me to recharge my batteries after social interactions. They are an integral part of my identity and help make me who I am today."
] ;?>
    <h1 class="animate__animated animate__pulse" style="text-align:center">About me</h1>
    <hr>
    <div class="about">

        
        <h3 class="animate__animated animate__lightSpeedInRight animate__delay-1s">
            <?php
                $startNum=0;
                for($count=$startNum; $count<sizeof($abouts); $count++){
                    echo $abouts[$count];
                    echo "\r\n";
                    echo "\r\n";
                    echo "\r\n";
                    echo "\r\n";
                    echo "\r\n";
                }
            ?>
        </h3>
    </div>
</body>
</html>